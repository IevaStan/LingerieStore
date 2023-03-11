<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DemoController extends Controller
{
    public function Index(): View 
    {
        return view('about');
    }

    public function ContactMethod(): View 
    {
        return view('contact');
    }
}
