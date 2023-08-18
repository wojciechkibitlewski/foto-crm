<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

use App\Models\Salessource;

class SalesSourceController extends Controller
{
    //
    public function index()
    {
        $sources = Salessource::latest()->paginate(5);
        return view('settings.salessource.index',compact('sources'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('settings.salessource.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $source = new Salessource;
            $source->source = isset($inputs['source']) ? $inputs['source'] : '';
            $source->slug = Str::slug($inputs['source']);

            try {
                if ($source->save()) {
                    return redirect()
                        ->route('settings.salessource.index')
                        ->with('success', 'Source created successfully.');
                }
            } catch (\Exception $ex) {
                return redirect()
                    ->route('settings.salessource.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(Salessource $source)
    {
        return view('settings.salessource.show',compact('source'));
    }
    
    public function edit(Request $request, string $id)
    {
        $source = Salessource::findOrFail($id);
        return view('settings.salessource.edit',compact('source'));
        
    }

    public function update(Request $request)
    {
        $request->validate([
            'source' => 'required',
        ]);
        $inputs = $request->all();

        //dd($inputs);
        try {
            Salessource::whereId($inputs['id'])->update([
                'source' => $inputs['source'],
                'slug' => Str::slug($inputs['source']) 
            ]);
            return redirect()
                    ->route('settings.salessource.index')
                    ->with('success','Source updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.salessource.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            Salessource::whereId($inputs['id'])->delete();
            return redirect()
                    ->route('settings.salessource.index')
                    ->with('success','Source deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.salessource.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

}
