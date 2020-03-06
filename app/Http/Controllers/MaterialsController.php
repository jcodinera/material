<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function create() {
        return view("materials/create");
    }
}
