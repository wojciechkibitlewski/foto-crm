<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;

class ProductsController extends Controller
{
    public function index():View
    {
        return view('products.home');
    }
}
