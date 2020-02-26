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
}
