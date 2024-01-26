<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function welcome(){
        return view("frontend.pages.home");
    }
    public function shop(){
        return view("frontend.pages.shop");
    }
}
