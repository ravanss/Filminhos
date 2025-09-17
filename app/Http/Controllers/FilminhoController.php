<?php

namespace App\Http\Controllers;

use App\Models\filminho;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilminhoResquest;
use Illuminate\Http\Request;

class FilminhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filminhos = filminho::all();
        return view('filminho.index', ['filminhos' => $filminhos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filminho.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FilminhoResquest $request)
    {
        $filminho = Filminho::create([
            'name' => $request['name'],
            'tipo' => $request['tipo']
        ]);
        if($filminho){
            return redirect()->route('filminho.index')->with('success', 'Filme cadastrado com sucesso!');
        } else {
            return redirect()->route('filminho.create')->with('error', 'Erro ao cadastrar filme. Tente novamente.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(filminho $filminho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(filminho $filminho)
    {
        return view('filminho.update', ['filme' => $filminho]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FilminhoResquest $request, filminho $filminho)
    {
        $FilmeAtualizado = $filminho->update([
            'name' => $request['name'],
            'tipo' => $request['tipo']
        ]);
        if($FilmeAtualizado){
            return redirect()->route('filminho.index')->with('success', 'Filme atualizado com sucesso!');
        } else {
            return redirect()->route('filminho.index')->with('error', 'Erro ao editar filme. Tente novamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(filminho $filminho)
    {
        //
    }
}
