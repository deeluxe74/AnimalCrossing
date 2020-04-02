<?php

namespace App\Http\Controllers;

use App\Fossile;

class FossileController extends Controller
{
    public function index(){
        return Fossile::all();
    }
}
