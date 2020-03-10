<?php

namespace App\Http\Controllers\catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\rellotges;

class CatalogController extends Controller
{

    // Llistat rellotges
    public function getIndex(){

        $rellotges = rellotges::all();
        return view('catalog.index', ['la_meva_llista_de_rellotges'=>$rellotges->toArray()]);
    }

    // Vista detall rellotge
    public function getShow ($id){

        $rellotges = rellotges::findOrFail($id);

        return view('catalog.show', ['id'=>$rellotges->toArray()]);
    }

    // Afegir rellotge
    public function getCreate (){

    	return view('catalog.create');
    }

    // Modificar rellotge
    public function getEdit ($id){

        $rellotges = rellotges::findOrFail($id);

        return view('catalog.edit', ['id'=>$rellotges->toArray()]);
    }

    // -----
    public function postCreate (Request $request){

        $rellotge = new Rellotges();

        $rellotge->title = $request->input('title');
        $rellotge->year = $request->input('year');
        $rellotge->color = $request->input('color');
        $rellotge->imagen = $request->input('imagen');
        $rellotge->synopsis = $request->input('synopsis');

        $rellotge->save();

        return redirect()->action('catalog\CatalogController@getIndex');
    }

    // -----
    public function putEdit (Request $request, $id){

        $rellotge = Rellotges::find($id);

        $rellotge->title = $request->input('title');
        $rellotge->year = $request->input('year');
        $rellotge->color = $request->input('color');
        $rellotge->imagen = $request->input('imagen');
        $rellotge->synopsis = $request->input('synopsis');

        $rellotge->save();

        return redirect()->action('catalog\CatalogController@getIndex');
    }
}
