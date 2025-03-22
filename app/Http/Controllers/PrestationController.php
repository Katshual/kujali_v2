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

    public function destroy($id)
    {
        $prestations = Prestation::findOrFail($id);
        $prestations->delete();
        return redirect('prestations')->with('success', 'Prestation deleted successfully.');
    }

    // Méthode pour afficher le formulaire de modification
    public function edit($id)
    {
        $prestation = Prestation::findOrFail($id);
        return view('prestations.edit', compact('prestation'));
    }

    // Méthode pour appliquer les changements
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $prestation = Prestation::findOrFail($id);
        $prestation->update([
            'nom' => $request->nom,
            'description' => $request->description,
        ]);

        return redirect()->route('prestations.index')->with('success', 'Prestation mise à jour avec succès');
    }
}
