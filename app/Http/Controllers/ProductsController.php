<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductsController extends Controller
{
    public function index():View
    {
        $products = Product::orderBy('created_at')->paginate(10);
        return view('products.index',compact('products'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        $productcategory = ProductCategory::latest()->get();
        return view('products.create',compact('productcategory'));
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'sku' => 'required',
            'name' => 'required',

        ]);
        $inputs = $request->all();

        if(!empty($inputs)){
            $product = new Product;
            $product->sku = isset($inputs['sku']) ? $inputs['sku'] : '';
            $product->name = isset($inputs['name']) ? $inputs['name'] : '';
            $product->desc = isset($inputs['desc']) ? $inputs['desc'] : '';
            $product->price = isset($inputs['price']) ? $inputs['price'] : '';
            $product->quant = isset($inputs['quant']) ? $inputs['quant'] : '';
            $product->category_id = isset($inputs['category_id']) ? $inputs['category_id'] : '';
            $product->user_id = $request->user()->id;

            try {
                if ($product->save()) {
                    return redirect()
                        ->route('products.index')
                        ->with('success', 'Product created successfully.');
                }
            } catch (\Exception $e) {
                return $e->getMessage();
                // return redirect()
                //     ->route('products.index')
                //     ->with('error', 'An error occurred while saving. Please try again.');
            }
        }
        
    }

    public function show(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show',compact('product'));
    }

    public function edit(Request $request, string $id)
    {
        $productcategory = ProductCategory::latest()->get();
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product','productcategory'));
        
    }

    public function update(Request $req)
    {
        $req->validate([
            'sku' => 'required',
            'name' => 'required',
        ]);

        //dd($inputs);
        try {
            $product = Product::findorFail($req->id);
            $product->sku = $req->sku;
            $product->name = $req->name;
            $product->desc = isset($req->desc) ? $req->desc : ' ';
            $product->price = isset($req->price) ? $req->price : ' ';
            $product->quant = isset($req->quant) ? $req->quant : ' ';
            $product->category_id = $req->category_id;

            //dd($product);
            $product->save();

            return redirect()
                    ->route('products.index')
                    ->with('success','Produkt updated successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('products.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }

    }

    public function destroy(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        try {
            Product::whereId($inputs['id'])->delete();
            return redirect()
                    ->route('products.index')
                    ->with('success','Product deleted successfully.');
            
        } catch (\Exception $ex) {
            return redirect()
                    ->route('products.index')
                    ->with('error', 'An error occurred while saving. Please try again.');
        }
    }
}
