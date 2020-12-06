<?php

namespace App\Http\Controllers;

use App\Annonces;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // on récupère toutes les annonces dans le moèdes annonces(on doit le créer)
        $annonces = Annonces::all(); /*all() est une méthode statique d'Annonces qui est méthode hérité du modèle */
        // dd($annonces); c'est comme une var_dump sur notre bdd de la tables annonces
        
        // pour envoyer à la vue 
    
        return view('home',compact('annonces'));
    }
}
