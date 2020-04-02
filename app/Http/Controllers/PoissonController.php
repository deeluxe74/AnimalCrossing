<?php

namespace App\Http\Controllers;

use App\Insecte;
use App\Poisson;
use App\Fossile;
use App\Autres;

use Illuminate\Http\Request;

class PoissonController extends Controller
{
    public function index(){
        return Poisson::all();
    }

    public function post(Request $request){
        $especes = Request('especes');
        if ($especes == 'Poisson'){
            $poisson = new Poisson;
        }
        elseif ($especes == 'Insecte'){
            $poisson = new Insecte;
        }
        elseif ($especes == 'Fossile'){
            $poisson = new Fossile;
        }
        elseif ($especes == 'Autres'){
            $poisson = new Autres;
        }

        $poisson->name = Request('name');
        $poisson->rare = Request('rare');
        $poisson->when = Request('when');
        $poisson->where = Request('where');
        $poisson->price = Request('price');
        $poisson->img = Request('img');
            
        $poisson->save();
        
        return redirect()->to('/');
    }
}
