<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagsController extends Controller
{
    public function index(Request $request)
    {
        $gender = $request->input('gender');

    if ($gender && $gender !== 'Todas') {
        $bags = Bag::where('gender', $gender)->get();
    } else {
        
        $bags = Bag::all();
    }
    
        return view('bags.index', [
        'bags' => $bags,
        'selectedGender' => $gender,
    ]);
    }

     public function show(int $id)
    {
        $bag = Bag::findOrFail($id);

        return view('bags.show', [
            'bag' => $bag,
        ]);
    }
     public function create()
    {
        if (!session()->has('user_id')) {
            return redirect()->route('auth.login.form');
        }
        return view('bags.create');
    }

     public function store(Request $request)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        $request->validate([
            'name' => 'required|min:2|max:100',
            'photo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category' => 'required|in:Urbana,De viaje',
            'gender' => 'required|in:Unisex,Mujer,Hombre',
            'price' => 'required|integer|min:1',
            'liters' => 'required|integer|min:1',
            'description' => 'required|min:10',
        ], [
            'name.required' => 'El nombre es un campo obligatorio.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'photo.required' => 'La foto es un campo obligatorio.',
            'photo.image' => 'El formato no es válido, debe ser una imagen.',
            'photo.mimes' => 'La foto debe ser un archivo JPG, JPEG, PNG o WEBP.',
            'photo.max' => 'La foto no puede superar los :max KB.',

            'category.required' => 'La categoría es un campo obligatorio.',
            'category.in' => 'La categoría debe ser Urbana o De viaje.',

            'gender.required' => 'El género es un campo obligatorio.',
            'gender.in' => 'El género debe ser Unisex, Mujer u Hombre.',

            'price.required' => 'El precio es un campo obligatorio.',
            'price.integer' => 'El precio debe ser un valor entero.',
            'price.min' => 'El precio debe ser mayor a $0.',

            'liters.required' => 'El litraje es un campo obligatorio.',
            'liters.integer' => 'El litraje debe ser un valor entero.',
            'liters.min' => 'El litraje debe ser mayor a 0.',

            'description.required' => 'La descripción es un campo obligatorio.',
            'description.min' => 'La descripción debe tener al menos :min caracteres.',
        ]);
        $data = $request->only(['name', 'photo', 'category', 'gender', 'price', 'liters' ,'description']);
        $bag = Bag::create($data);

            if ($request->hasFile('photo')) {
            $filename = $bag->bag_id . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('img'), $filename);
            $bag->update(['photo' => $filename]);
        }
        return to_route('bags.index')
            ->with('feedback.message', 'La nueva mochila ' . $bag->name . ' ha sido creada con éxito.');
    }

    public function edit(int $id)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        return view('bags.edit', [
            'bag' => Bag::findOrFail($id),
        ]);
    }

    public function update(Request $request, int $id)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        $request->validate([
            'name' => 'required|min:2|max:100',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'category' => 'required|in:Urbana,De viaje',
            'gender' => 'required|in:Unisex,Mujer,Hombre',
            'price' => 'required|integer|min:1',
            'liters' => 'required|integer|min:1',
            'description' => 'required|min:10',
        ], [
            'name.required' => 'El nombre es un campo obligatorio.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',

            'photo.image' => 'El formato no es válido, debe ser una imagen.',
            'photo.mimes' => 'La foto debe ser un archivo JPG, JPEG, PNG o WEBP.',
            'photo.max' => 'La foto no puede superar los :max KB.',

            'category.required' => 'La categoría es un campo obligatorio.',
            'category.in' => 'La categoría debe ser Urbana o De viaje.',

            'gender.required' => 'El género es un campo obligatorio.',
            'gender.in' => 'El género debe ser Unisex, Mujer u Hombre.',

            'price.required' => 'El precio es un campo obligatorio.',
            'price.integer' => 'El precio debe ser un valor entero.',
            'price.min' => 'El precio debe ser mayor a $0.',

            'liters.required' => 'El litraje es un campo obligatorio.',
            'liters.integer' => 'El litraje debe ser un valor entero.',
            'liters.min' => 'El litraje debe ser mayor a 0.',

            'description.required' => 'La descripción es un campo obligatorio.',
            'description.min' => 'La descripción debe tener al menos :min caracteres.',
        ]);
        
        $bag = Bag::findOrFail($id);

        $data = $request->only(['name', 'photo', 'category', 'gender', 'price', 'liters' ,'description']);

            if ($request->hasFile('photo')) {
            $filename = $bag->bag_id . '.' . $request->file('photo')->extension();
            $request->file('photo')->move(public_path('img'), $filename);
            $data['photo'] = $filename;
        }

        $bag->update($data);

        return to_route('bags.index')
            ->with('feedback.message', 'La mochila ' . $bag->name . ' se ha actualizado con éxito.');
    }

        public function delete(int $id)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        return view('bags.delete', [
            'bag' => Bag::findOrFail($id),
        ]);
    }

    public function destroy(int $id)
    {
        if (!session()->has('user_id')) {
        return redirect()->route('auth.login.form');
        }
        $bag = Bag::findOrFail($id);

            if ($bag->photo && file_exists(public_path('img/' . $bag->photo))) {
            unlink(public_path('img/' . $bag->photo));
        }

        $bag->delete();

        return to_route('bags.index')
            ->with('feedback.message', 'La mochila ' . $bag->name . ' se ha eliminado con éxito.');
    }
}