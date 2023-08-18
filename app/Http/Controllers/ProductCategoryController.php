<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

use App\Models\ProductCategory;


class ProductCategoryController extends Controller
{
    //php
    public function index()
    {
        $productcategory = ProductCategory::latest()->paginate(5);
        return view('settings.productcategory.index',compact('productcategory'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('settings.productcategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $productcategory = new ProductCategory;
            $productcategory->category = isset($inputs['category']) ? $inputs['category'] : '';
            $productcategory->slug = Str::slug($inputs['category']);

            try {
                if ($productcategory->save()) {
                    return redirect()
                        ->route('settings.productcategory.index')
                        ->with('success', 'Product category created successfully.');
                }
            } catch (\Exception $ex) {
                return redirect()
                    ->route('settings.productcategory.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(ProductCategory $productcategory)
    {
        return view('settings.productcategory.show',compact('productcategory'));
    }

    public function edit(Request $request, string $id)
    {
        $productcategory = ProductCategory::findOrFail($id);
        return view('settings.productcategory.edit',compact('productcategory'));
        
    }

    // public function edit(ProductCategory $productcategory)
    // {
    //     dd($productcategory);
    //     //return view('settings.productcategory.edit',compact('productcategory'));
    // }

    public function update(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);
        $inputs = $request->all();

        //dd($inputs);
        try {
            ProductCategory::whereId($inputs['id'])->update([
                'category' => $inputs['category'],
                'slug' => Str::slug($inputs['category']) 
            ]);
            return redirect()
                    ->route('settings.productscatgory.index')
                    ->with('success','Product category updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.productcategory.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            ProductCategory::whereId($inputs['id'])->delete();
            return redirect()
                    ->route('settings.productscatgory.index')
                    ->with('success','Product category deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('settings.productcategory.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }


        
        // $productcategory->delete();
        // return redirect()
        //             ->route('settings.productcategory.index')
        //             ->with('success','Product category deleted successfully.');

    }
}
