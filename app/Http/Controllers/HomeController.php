<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function language(Request $request)
    {
        // dd($request->server('HTTP_ACCEPT_LANGUAGE'));

        // $userLanguages = preg_split('/[,;]/', $request->server('HTTP_ACCEPT_LANGUAGE'));
        // dd($userLanguages);

        $locale = locale_accept_from_http($request->server('HTTP_ACCEPT_LANGUAGE'));
        echo $locale;
    }
}
