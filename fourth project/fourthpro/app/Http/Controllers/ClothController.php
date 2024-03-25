<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cloth;

class ClothController extends Controller
{
    public function cloth(){
        $Cloth= null;
        $Cloths=Cloth::get()->all();

        return view('cloth.cloth',compact('Cloth',"cloths"));
    }
    public function store(Request $request){
        $cloth =cloth::create([
            'brands'=>$request->brands,
            'origin'=>$request->origin,
            'price'=>$request->price,
            'type'=>$request->type,
        ]);
        return view('cloth.store');
        $cloths=Cloth::get()->all();
        return view('cloth.cloth',compact("Cloth","cloths"));

    }
    
}
