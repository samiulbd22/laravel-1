<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return View('demo');
    }
    public function bitm(){
        return View('bitm');
    }
    public function about(){
        return View('about');
    }
    public function contact(){
        return View('contact');
    }
}
