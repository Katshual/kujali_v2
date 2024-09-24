<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        // Récupérer tous les tarifs depuis la base de données
        $tarifs = Tarif::all();

        // Retourner la vue "tarifs.index" en passant la variable $tarifs
        return view('tarifs.index', compact('tarifs'));
    }

    public function destroy($id)
    {
        $tarifs = Tarif::findOrFail($id);
        $tarifs->delete();
        return redirect('tarifs')->with('success', 'Tarif deleted successfully.');
    }

}
