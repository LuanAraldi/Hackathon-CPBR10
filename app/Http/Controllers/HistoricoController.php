<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pontos;
use Illuminate\Support\Facades\Auth;

class HistoricoController extends Controller
{
    public function index()
    {
        $pontos = Pontos::where('id_usuario', Auth::user()->id)->get();

        foreach ($pontos as $ponto){
            $ponto['nome_local'] = Locais::where('id', $ponto->id_local)->first()->nome;
        }

        return view('historico', compact('pontos'));
    }
}
