<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;

class PrestationController extends Controller
{
    public function index()
    {
        // Récupérer toutes les prestations depuis la base de données
        $prestations = Prestation::all();

        // Retourner la vue "prestations.index" en passant la variable $tarifs
        return view('prestations.index', compact('prestations'));
    }
}
