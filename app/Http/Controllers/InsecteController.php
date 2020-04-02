<?php

namespace App\Http\Controllers;

use App\Insecte;

class InsecteController extends Controller
{
    public function index(){
        return Insecte::all();
    }
}
