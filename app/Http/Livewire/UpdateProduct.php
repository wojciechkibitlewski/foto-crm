<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Product;
use App\Models\Lead;


class UpdateProduct extends Component
{
    public $records;
    public $leadProduct;
    public $lead;
    public $product_id;
    public $lp;
    public $showform = false;

    public function mount($lead)
    {
        //$this->lead = DB::table('leads')->where('id', $lead)->get();
        $this->leadProduct = DB::table('lead_products')->where('lead_id', $lead)->orderBy('product_id')->get();
        $this->ld = Lead::select('*')->where('id', $lead)->first();
        //$this->product_id =  $this->leadProduct['product_id'];
        
        //$this->product_id_9 = 10;
    }

    public function addProduct($id)
    {
        $showform = true;
    }

    public function render()
    {     
        //dd($this->lead);   
        $this->records = Product::select('*')->get();
       
        return view('livewire.update-product');
    }
}
