<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;

class HomeController extends Controller
{
    //
    public function language(Request $request)
    {

        $locale = locale_accept_from_http($request->server('HTTP_ACCEPT_LANGUAGE'));
        echo $locale;
    }

    public function index():View
    {
        return view('dashboard');
    }
}
