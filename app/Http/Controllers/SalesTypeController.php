<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

use App\Models\Salestype;

class SalesTypeController extends Controller
{
    //
    public function index()
    {
        $types = Salestype::orderBy('order', 'asc')->paginate(10);
        return view('settings.salestype.index',compact('types'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('settings.salestype.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'order' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $type = new Salestype;
            $type->type = isset($inputs['type']) ? $inputs['type'] : '';
            $type->order = isset($inputs['order']) ? $inputs['order'] : '';

            try {
                if ($type->save()) {
                    return redirect()
                        ->route('settings.salestype.index')
                        ->with('success', 'type created successfully.');
                }
            } catch (\Exception $ex) {
                return redirect()
                    ->route('settings.salestype.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(Salestype $type)
    {
        //$type = Salestype::findOrFail($id);
        return view('settings.salestype.show',compact('type'));
    }
    
    public function edit(Request $request, string $id)
    {
        $type = Salestype::findOrFail($id);
        return view('settings.salestype.edit',compact('type'));
        
    }

    public function update(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'order' => 'required',
        ]);
        $inputs = $request->all();

        //dd($inputs);
        try {
            Salestype::whereId($inputs['id'])->update([
                'type' => $inputs['type'],
                'order' => $inputs['order'],
            ]);
            return redirect()
                    ->route('settings.salestype.index')
                    ->with('success','Type updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.salestype.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            Salestype::whereId($inputs['id'])->delete();
            return redirect()
                    ->route('settings.salestype.index')
                    ->with('success','Type deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.salestype.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }
}
