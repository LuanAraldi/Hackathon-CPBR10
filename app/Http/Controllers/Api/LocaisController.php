<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Locais;

class LocaisController extends Controller
{
    public function create(Request $request)
    {
        $locais = new Locais();
        $locais->nome = $request->nome;
        $locais->latitude = $request->latitude;
        $locais->longitude = $request->longitude;

        $locais->save();

        return $locais;
    }

    public function retrieve(Request $request)
    {
        if ($request->id){
            return Locais::where('id', $request->id)->get();
        }else{
            return Locais::where('id', '!=', null);
        }
    }

    public function update(Request $request)
    {
        $local = Locais::where('id', $request->id)->first();
        $local->nome = $request->nome;
        $local->latitude = $request->latitude;
        $local->longitude = $request->longitude;

        $local->save();

        return $local;
    }

    public function delete(Request $request)
    {
        Local::where('id', $request->id)->delete();
    }
}
