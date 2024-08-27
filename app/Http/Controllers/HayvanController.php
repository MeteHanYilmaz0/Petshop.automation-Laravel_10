<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hayvan;
use Illuminate\Http\Request;

class HayvanController extends Controller
{
    public function index()
    {
        $hayvans = Hayvan::all();
        return view('adminPanel.hayvan.index', compact('hayvans'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('adminPanel.hayvan.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasyon işlemleri buraya eklenebilir

        $hayvan = new Hayvan([
            'name' => $request->get('name'),
            'yas' => $request->get('yas'),
            'fiyat' => $request->get('fiyat'),
            'cins_adi' => $request->get('cins_adi'),
            'renk' => $request->get('renk'),
            'category_id' => $request->get('category_id'),
            'image' => $request->file('image')->store('images', 'public')
        ]);
        $hayvan->save();
        return redirect()->route('hayvan.index')->with('success', 'Hayvan başarıyla oluşturuldu.');
    }

    public function show($id)
    {
        $hayvan = Hayvan::find($id);
        return view('adminPanel.hayvan.show', compact('hayvan'));
    }

    public function edit($id)
    {
        $hayvan = Hayvan::find($id);
        $categories = Category::all();
        return view('adminPanel.hayvan.edit', compact('hayvan', 'categories'));
    }

    public function update(Request $request, $id)
    {
        // Validasyon işlemleri buraya eklenebilir

        $hayvan = Hayvan::find($id);
        $hayvan->name = $request->get('name');
        $hayvan->yas = $request->get('yas');
        $hayvan->fiyat = $request->get('fiyat');
        $hayvan->cins_adi = $request->get('cins_adi');
        $hayvan->renk = $request->get('renk');
        $hayvan->category_id = $request->get('category_id');

        if ($request->hasFile('image')) {
            $hayvan->image = $request->file('image')->store('images', 'public');
        }

        $hayvan->save();
        return redirect()->route('hayvan.index')->with('success', 'Hayvan başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $hayvan = Hayvan::find($id);
        $hayvan->delete();
        return redirect()->route('hayvan.index')->with('success', 'Hayvan başarıyla silindi.');
    }
}
