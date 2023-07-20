<?php

namespace App\Http\Controllers;

use App\Models\cycle;
use App\Models\niveau;
use App\Models\filiere;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    { 
        
     
        return view('layouts.home');
    }
    public function create()
    {
        return view('forme.parametres');
    }
    
    public function store(cycle $cycle , Request $request)
    {


        $cycle->cycle = $request->input('cycle');
        $cycle->save();
        return redirect('nouveau-filiere');

            
    }
    public function niveau(niveau $niveau , Request $request)
    {


        $niveau->niveau = $request->input('niveau');
        $niveau->save();
        return redirect('nouveau-filiere');

            
    }
    public function filiere(filiere $filiere , Request $request)
    {


        $filiere->filiere = $request->input('filiere');
        $filiere->save();
        return redirect('nouveau-filiere');

            
    }
}
