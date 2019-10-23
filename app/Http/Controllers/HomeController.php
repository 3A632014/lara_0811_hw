<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use test\Mockery\HasUnknownClassAsTypeHintOnMethod;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
