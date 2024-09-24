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
}
