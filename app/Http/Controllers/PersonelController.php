<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Personel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personels = Personel::all();
        return view('adminPanel.personel.index', compact('personels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('adminPanel.personel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'maas' => 'required',
            'email' => 'required|email',

            'pozisyon' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('personel_images', $imageName, 'public');

        Personel::create([
            'name' => $request->name,
            'maas' => $request->maas,
            'email' => $request->email,
            'image' => '/storage/personel_images/'.$imageName,
            'pozisyon' => $request->pozisyon,
        ]);

        return redirect()->route('admin.personel')
            ->with('success', 'Personel created successfully.');
    }

    public function show($id)
    {
        $personel = Personel::find($id);
        return view('adminPanel.personel.show', compact('personel'));
    }

    public function edit($id)
    {
        $personel = Personel::find($id);
        return view('adminPanel.personel.edit', compact('personel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'maas' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pozisyon' => 'required',
        ]);

        $personel = Personel::find($id);

        if ($request->hasFile('image')) {
            // eski resmi sil
            Storage::delete('public/'.$personel->image);

            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('personel_images', $imageName, 'public');
            $personel->image = '/storage/personel_images/'.$imageName;
        }

        $personel->update([
            'name' => $request->name,
            'maas' => $request->maas,
            'email' => $request->email,
            'pozisyon' => $request->pozisyon,
            'image' => $personel->image,
        ]);

        return redirect()->route('admin.personel')
            ->with('success', 'Personel updated successfully.');
    }

    public function destroy($id)
    {
        $personel = Personel::find($id);
        Storage::delete('public/'.$personel->image);
        $personel->delete();

        return redirect()->route('admin.personel')
            ->with('success', 'Personel deleted successfully.');
    }
}
