<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pontos;

class PontosController extends Controller
{
    public function create(Request $request)
    {
        $ponto = New Pontos();
        $ponto->id_usuario = $request->id_usuario;
        $ponto->id_local = $request-id_local;
        $ponto->tipo = $request->tipo;
        $ponto->material = $request->material;
        $ponto->peso = $request->peso;
        $ponto->quantidade = $request->material;

        $ponto->save();

        return $ponto;
    }

    public function retrieve(Request $request)
    {
        if ($request->id){
            return Pontos::where('id', $request->id)->first();
        }else{
            return Pontos::where('id', '!=', null);
        }
    }

    public function update(Request $request)
    {
        $ponto = Pontos::where('id', $request->id);

        $ponto->id_usuario = $request->id_usuario;
        $ponto->id_local = $request->id_local;
        $ponto->tipo = $request->tipo;
        $ponto->material = $request->material;
        $ponto->peso = $request->peso;
        $ponto->quantidade = $request->quantidade;

        $ponto->save();

        return $ponto;
    }

    public function delete(Request $request)
    {
        Pontos::where('id', $request->id)->delete();
    }
}
