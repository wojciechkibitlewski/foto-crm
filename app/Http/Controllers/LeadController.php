<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use App\Models\Lead;
use App\Models\LeadProduct;
use App\Models\Product;
use App\Models\Client;
use App\Models\Salessource;
use App\Models\Salestype;

class LeadController extends Controller
{
    //
    public function index():View
    {
        $leads = Lead::orderBy('executionDate')->paginate(10);
        return view('leads.index',compact('leads'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $products = Product::select('name', 'sku')->orderBy('sku')->get();
        $clients = Client::select('name', 'phone')->orderBy('name')->get();
        $sources = Salessource::orderBy('source')->get();
        $types = Salestype::orderBy('order')->get();

        return view('leads.create',compact('products', 'clients', 'sources','types'));
    }



    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'title' => 'required',
            'source_id' => 'required',
            'type_id' => 'required',
            'executionDate' => 'required',
            'client_name' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            
            if(empty($inputs['client_id'])) {
                $client= new Client;
            } else {
                $client = Client::findorFail($inputs['client_id']);
            }   
                
            $client->name = isset($inputs['client_name']) ? $inputs['client_name'] : '';
            $client->phone = isset($inputs['client_phone']) ? $inputs['client_phone'] : '';
            $client->email = isset($inputs['client_email']) ? $inputs['client_email'] : '';
            $client->social = isset($inputs['client_social']) ? $inputs['client_social'] : '';
            $client->firm = isset($inputs['client_firm']) ? $inputs['client_firm'] : '';
            $client->note= isset($inputs['client_note']) ? $inputs['client_note'] : '';
            $client->user_id = $request->user()->id;
            $client->save();
            $client_id = $client->id;
            

            $lead = new Lead;
            $lead->title = isset($inputs['title']) ? $inputs['title'] : '';
            $lead->note = isset($inputs['note']) ? $inputs['note'] : '';
            $lead->noteForClient = isset($inputs['noteForClient']) ? $inputs['noteForClient'] : '';
            $lead->source_id = isset($inputs['source_id']) ? $inputs['source_id'] : '';
            $lead->type_id = isset($inputs['type_id']) ? $inputs['type_id'] : '';
            $lead->executionDate = isset($inputs['executionDate']) ? $inputs['executionDate'] : '';

            $executionTime = isset($inputs['executionTime']) ? $inputs['executionTime'] : '';
            
            $lead->executionTime = date("H:i", strtotime($executionTime));
            $lead->leadValue = isset($inputs['leadValue']) ? $inputs['leadValue'] : '';
            $lead->user_id = $request->user()->id;
            $lead->client_id = $client_id;
            $lead->save();
            //dd($inputs['product_id']);
            if(!empty($inputs['product_id'])){
                foreach ($inputs['product_id'] as $key=>$value) {
                    $leadproduct = new LeadProduct;
                    $leadproduct->lead_id = $lead->id;
                    $leadproduct->product_id = $value;
                    $leadproduct->quant =$inputs['product_id'][$key];
                    $leadproduct->user_id =  $request->user()->id;
    
                    $leadproduct->save();
                }
            
            }
            return redirect()->route('leads.index');
            
        }
        
    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            LeadProduct::where('lead_id', $inputs['id'])->delete();
            Lead::whereId($inputs['id'])->delete();

            return redirect()
                    ->route('leads.index')
                    ->with('success','Lead deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('leads.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }
    }
}
