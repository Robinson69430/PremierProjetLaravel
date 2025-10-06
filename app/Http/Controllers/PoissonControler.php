
<?php

namespace App\Http\Controllers;

use App\Models\poissons;
use Illuminate\Http\Request;

class poissonsController extends Controller
{
    public function index()
    {
        // Aller chercher tous les poissons dans la base
        $poissons = poissons::all();
        // Envoyer ces poissons à une vue
        return view('index', [
            'poissons' => $poissons
        ]);
    }

    public function show($id)
    {
        $poissons = poissons::findOrFail($id);
        return view('show', [
            'poissons' => $poissons
        ]);
    }
    public function create()
    {
        return view('create');
    }

    public function store()
    {
        // Valider les données
        request()->validate([
            'name' => 'required|string|min:4|max:25',
            'price' => 'required|decimal:2',
            'picture' => 'nullable',
            'description' => 'required|string'
        ]);

        $s = new poissons;
        $s->name = request('name');
        $s->price = request('price')*100;
        $s->description = request('description');
        $s->picture = request('picture');
        $s->save();
        return redirect('/poissons/'.$s->id);
    }

    public function edit($id)
    {
        $poissons = poissons::findOrFail($id);
        return view('edit', compact('poissons'));
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required|string|min:4|max:25',
            'price' => 'required|decimal:2',
            'picture' => 'nullable',
            'description' => 'required|string'
        ]);

        $s = poissons::findOrFail($id);
        $s->name = request('name');
        $s->price = request('price')*100;
        $s->description = request('description');
        $s->picture = request('picture');
        $s->save();
        return redirect('/poissons/'.$id);
    }
    public function destroy($id)
    {
        poissons::destroy($id);
        return redirect('/poissons');
    }
}
