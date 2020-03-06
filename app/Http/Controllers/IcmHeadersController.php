<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IcmHeadersController extends Controller
{
    public function create() {
        return view("icmHeader/create");
    }

    public function store() {
        
    }
}
