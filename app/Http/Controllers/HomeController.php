<?php

namespace App\Http\Controllers;

use App\Models\cycle;
use App\Models\niveau;
use App\Models\filiere;
use App\Models\nationalite;
use App\Models\anneeUniversitaire;
use App\Models\etudiant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    { 
        $Programmation = Etudiant::where('filiere', 'Annalyse et Programmation')->count();
        $Reseau = Etudiant::where('filiere', 'Reseau')->count();
        $Securite = Etudiant::where('filiere', 'Securite')->count();
        $licence = Etudiant::where('cycle', 'LICENCE')->count();
        $master = Etudiant::where('cycle', 'MASTER')->count();
        $doctorat = Etudiant::where('cycle', 'DOCTORAT')->count();
        $burkinabe = Etudiant::where('nationalite', 'Burkinabe')->count();
        $tchadien = Etudiant::where('nationalite', 'Tchadien')->count();
        $malienne = Etudiant::where('nationalite', 'Malienne')->count();
        $annee2022_2023 = Etudiant::where('anneeuniversitaire', '2022-2023')->count();
        $annee2023_2024 = Etudiant::where('anneeuniversitaire', '2023-2024')->count();
        $annee2024_2025 = Etudiant::where('anneeuniversitaire', '2024-2025')->count();
    
        return view('layouts.home', [
            'Programmation' => $Programmation,
            'Reseau' => $Reseau,
            'Securite' => $Securite,
            'licence' => $licence,
            'master' => $master,
            'doctorat' => $doctorat,
            'burkinabe' => $burkinabe,
            'tchadien' => $tchadien,
            'malienne' => $malienne,
            'annee2022_2023' => $annee2022_2023,
            'annee2023_2024' => $annee2023_2024,
            'annee2024_2025' => $annee2024_2025,
        ]);
    }
    public function create()
    {
        return view('forme.parametres');
    }
    public function comptesecretaire()
    {
        return view('auth.register');
    }
    public function etudiant()
    {
        $etudiants = etudiant::all();
        $cycles = Cycle::all();
        $niveaux = Niveau::all();
        $filieres = Filiere::all();
        $nationalites = nationalite::all();
        $annee_universitaires = anneeUniversitaire::all();
        
        return view('forme.etudiant', [
            'etudiants' => $etudiants,
            'cycles' => $cycles,
            'niveaux' => $niveaux,
            'filieres' => $filieres,
            'nationalites' => $nationalites,
            'annee_universitaires' => $annee_universitaires,
              
        ]);
        
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
    public function nationalite(nationalite $nationalite , Request $request)
    {


        $nationalite->nationalite = $request->input('nationalite');
        $nationalite->save();
        return redirect('nouveau-filiere');

            
    }
    public function anneeuniversitaire(anneeuniversitaire $anneeuniversitaire , Request $request)
    {


        $anneeuniversitaire->anneeuniversitaire = $request->input('anneeuniversitaire');
        $anneeuniversitaire->save();
        return redirect('nouveau-filiere');

            
    }
    public function ajoutetudiant(etudiant $etudiant, Request $request)
    {
        $etudiant = new etudiant();
        $etudiant->cycle = $request->input('cycle');
        $etudiant->niveau = $request->input('niveau');
        $etudiant->filiere = $request->input('filiere');
        $etudiant->nationalite = $request->input('nationalite');
        $etudiant->anneeuniversitaire = $request->input('anneeuniversitaire');
        $etudiant->matricule = $request->input('matricule');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->datenaissance = $request->input('datenaissance');
        $etudiant->genre = $request->input('genre');
        $etudiant->email = $request->input('email');
        $etudiant->numero = $request->input('numero');
        $etudiant->photo = $request->input('photo');
       
    
        if ($request->hasFile('photo')) {
            $fileName = time() . $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public', $fileName);
            $etudiant->photo = '/storage/' . $fileName;
        }
        // $etudiant->image = $request->input('image');
        $etudiant->save();
        // Rediriger ou effectuer d'autres actions après l'enregistrement
        return redirect('nouveau-enregistrement');
        
    }
    public function carte()
    {
        $etudiant= etudiant::all();
       
        return view('forme.carte', compact('etudiant'));
    }
    public function vuecard($id)
    {
        $etudiant=Etudiant::find($id);
       
        return view('forme.vue', compact('etudiant'));
    }
    public function liste()
    {
        $etudiant=Etudiant::all();
       
        return view('forme.liste', compact('etudiant'));
    }
    public function delete($id)
       {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();

        return redirect('forme.liste');
       }
       public function edit($id)
       {
        // Recuperer l'eleve à modifier
        $etudiant = Etudiant::find($id);
        return view('forme.edit' ,[
            'etudiant'=> $etudiant, 
        ]);
       }
}
