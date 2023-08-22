<?php

namespace App\Helpers;
use App\Models\Client;
use App\Models\Salestype;
use App\Models\Salessource;
use App\Models\Product;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function getClientName(string $id)
    {
        $client = Client::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $client->name;
    }

    public static function getStateName(string $id)
    {
        $type = Salestype::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $type->type;
    }
    
    public static function getSourceName(string $id)
    {
        $source = Salessource::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $source->source;
    }

    public static function getProductName(string $id)
    {
        $product = Product::findOrFail($id);
        //$client = Client::select('name')->where('id','=',$id)->get();
        return $product->name;
    }
}