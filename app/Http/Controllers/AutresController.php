<?php

namespace App\Http\Controllers;

use App\Autres;

class AutresController extends Controller
{
    public function index(){
        return Autres::all();
    }
}
