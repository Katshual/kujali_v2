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
   // Méthode pour afficher le formulaire de modification
   public function edit($id)
   {
       $tarifs = Tarif::findOrFail($id);
       return view('tarifs.edit', compact('tarifs'));
   }

     // Méthode pour appliquer les changements
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'prix' => 'nullable|string',
        ]);

        $tarifs = Tarif::findOrFail($id);
        $tarifs->update([
            'titre' => $request->titre,
            'prix' => $request->prix,
        ]);

        return redirect()->route('tarifs.index')->with('success', 'Tarif mis à jour avec succès');
    }

}
