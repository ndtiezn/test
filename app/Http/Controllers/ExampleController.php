<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ExampleController extends Controller
{
    public function hello(): Factory|View|Application
    {
        //return '<div><b>h<span style="color: red;">ell</span>o</b>';
        return view('hello');
    }
}
