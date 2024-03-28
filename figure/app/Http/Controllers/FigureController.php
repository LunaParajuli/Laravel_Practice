<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Figure;

class FigureController extends Controller
{
    public function store (Request $request){

         $data = $request->validate([
                  'brand'=>'required',
                  'origin' =>'required',
                  'category'=>'',
                  'type'=>'',
                  'price'=>'required|decimal:0,2',
                  'description'=> ''
         ]);
        $newFigure = Figure::create($data);
         return redirect (route('collect'));

    }
    public function collect(){
        $figures = Figure::get();

        return view('collect',['figures'=>$figures]);
    }

    public function edit($id)
    {
        $figures = Figure::find($id);

        return view('edit',['figures'=>$figures]);
    }


    public function update(){
        $data = $request->validate([
            'brand'=>'required',
            'origin' =>'required',
            'category'=>'',
            'type'=>'',
            'price'=>'required|decimal:0,2',
            'description'=> ''
   ]);
  $newFigure = Figure::update($data);
   return redirect (route('collect'));
    }

}
