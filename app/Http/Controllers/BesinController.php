<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Besin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BesinController extends Controller
{
    public function index()
    {
        $besinler = Besin::all();
        return view('adminPanel.besin.index', compact('besinler'));
    }

    public function create()
    {
        return view('adminPanel.besin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'fiyat' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Besin::create([
            'name' => $request->name,
            'fiyat' => $request->fiyat,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('besin.index')->with('success', 'Besin başarıyla oluşturuldu.');
    }

    public function show(Besin $besin)
    {
        return view('adminPanel.besin.show', compact('besin'));
    }

    public function edit(Besin $besin)
    {
        return view('adminPanel.besin.edit', compact('besin'));
    }

    public function update(Request $request, Besin $besin)
    {
        $request->validate([
            'name' => 'required',
            'fiyat' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/' . $besin->image);

            // Upload new image
            $imagePath = $request->file('image')->store('images', 'public');
            $besin->image = $imagePath;
        }

        $besin->name = $request->name;
        $besin->fiyat = $request->fiyat;
        $besin->description = $request->description;
        $besin->save();

        return redirect()->route('besin.index')->with('success', 'Besin başarıyla güncellendi.');
    }

    public function destroy(Besin $besin)
    {
        // Delete image
        Storage::delete('public/' . $besin->image);

        $besin->delete();
        return redirect()->route('besin.index')->with('success', 'Besin başarıyla silindi.');
    }
}
