<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bakim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BakimController extends Controller
{
    public function index()
    {
        $bakims = Bakim::all();
        return view('adminPanel.bakim.index', compact('bakims'));
    }

    public function create()
    {
        return view('adminPanel.bakim.create');
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

        Bakim::create([
            'name' => $request->name,
            'fiyat' => $request->fiyat,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('bakim.index')->with('success', 'Bakım ürünü başarıyla oluşturuldu.');
    }

    public function show(Bakim $bakim)
    {
        return view('adminPanel.bakim.show', compact('bakim'));
    }

    public function edit(Bakim $bakim)
    {
        return view('adminPanel.bakim.edit', compact('bakim'));
    }

    public function update(Request $request, Bakim $bakim)
    {
        $request->validate([
            'name' => 'required',
            'fiyat' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/' . $bakim->image);

            // Upload new image
            $imagePath = $request->file('image')->store('images', 'public');
            $bakim->image = $imagePath;
        }

        $bakim->name = $request->name;
        $bakim->fiyat = $request->fiyat;
        $bakim->description = $request->description;
        $bakim->save();

        return redirect()->route('bakim.index')->with('success', 'Bakım ürünü başarıyla güncellendi.');
    }

    public function destroy(Bakim $bakim)
    {
        // Delete image
        Storage::delete('public/' . $bakim->image);

        $bakim->delete();
        return redirect()->route('bakim.index')->with('success', 'Bakım ürünü başarıyla silindi.');
    }


}
