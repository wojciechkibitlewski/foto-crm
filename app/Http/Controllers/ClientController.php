<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function index():View
    {
        $clients = Client::orderBy('created_at')->paginate(10);
        return view('clients.index',compact('clients'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'name' => 'required',

        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $client = new Client;
            $client->name = isset($inputs['name']) ? $inputs['name'] : '';
            $client->email = isset($inputs['email']) ? $inputs['email'] : '';
            $client->phone = isset($inputs['phone']) ? $inputs['phone'] : '';
            $client->social = isset($inputs['social']) ? $inputs['social'] : '';
            $client->firm = isset($inputs['firm']) ? $inputs['firm'] : '';
            $client->note= isset($inputs['note']) ? $inputs['note'] : '';
            $client->user_id = $request->user()->id;

            try {
                if ($client->save()) {
                    return redirect()
                        ->route('clients.index')
                        ->with('success', 'client created successfully.');
                }
            } catch (\Exception $e) {
                //return $e->getMessage();
                return redirect()
                    ->route('clients.index')
                    ->with('error', $e->getMessage());
            }
        }
        
    }

    public function show(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        //dd($client );
        return view('clients.show',compact('client'));
    }

    public function edit(Request $request, string $id)
    {
        $client = Client::findOrFail($id);
        //dd($client );
        return view('clients.edit',compact('client'));
        
    }

    public function update(Request $req)
    {
        $req->validate([
            'name' => 'required|max:255',
            'email' => 'email',
            'phone' => 'numeric|digits:10',
        ]);
        
        //dd( $req->all());
        try {
            $client = Client::findorFail($req->id);
            $client->name = $req->name;
            $client->email = isset($req->email) ? $req->email : ' ';
            $client->phone = isset($req->phone) ? $req->phone : ' ';
            $client->social = isset($req->social) ? $req->social : ' ';
            $client->firm = isset($req->firm) ? $req->firm : ' ';
            $client->note = isset($req->note) ? $req->note : ' ';
            //dd($client);
            $client->save();

            return redirect()
                    ->route('clients.index')
                    ->with('success','Client updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('clients.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            Client::whereId($inputs['id'])->delete();
            return redirect()
                    ->route('clients.index')
                    ->with('success','Client deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('clients.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }
    }
}
