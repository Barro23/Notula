<?php

namespace App\Http\Controllers;

class Controller
{
    public function index(){
        return view("index");
    }
    public function sobre(){
        return view("sobre.view");
    }
}
