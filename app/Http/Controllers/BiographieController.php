<?php

namespace App\Http\Controllers;

use App\Models\Biographie;
use Illuminate\Http\Request;

class BiographieController extends Controller
{
    public function index()
    {
        // Récupérer tous la biographie depuis la base de données
        $biographies = Biographie::all();

        // Retourner la vue "biographies.index" en passant la variable $biographie
        return view('biographies.index', compact('biographies'));
    }

    public function destroy($id)
{
    $biographies = Biographie::findOrFail($id);
    $biographies->delete();
    return redirect('biographies')->with('success', 'Biographie deleted successfully.');
}
   // Méthode pour afficher le formulaire de modification
   public function edit($id)
   {
       $biographies = Biographie::findOrFail($id);
       return view('biographies.edit', compact('biographies'));
   }

    // Méthode pour appliquer les changements
    public function update(Request $request, $id)
    {
        $request->validate([
            'contenu' => 'nullable|string',
        ]);

        $biographies = Biographie::findOrFail($id);
        $biographies->update([
            'contenu' => $request->contenu

        ]);

        return redirect()->route('biographies.index')->with('success', 'Biographie mise à jour avec succès');
    }

}
