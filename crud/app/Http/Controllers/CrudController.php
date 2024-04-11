<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function index(){

        $alldata=Crud::get()->all();
       return view('cruds.index',compact("alldata"));
    }
    public function create(){
        return view('cruds.create');
    }
    public function store(Request $request){

       $request->validate([
         'name'=>'required',
         'email'=>'required',
         'contact'=>'required|numeric',
       ]);

       $data = Crud::create([
         'name'=>$request->name,
         'email'=>$request->email,
         'contact'=>$request->contact,
       ]);
       $alldata=Crud::get()->all();
       return redirect()->route('cruds.index');

    }
    public function edit($id){
        $data=Crud::find($id);

        return view('cruds.edit',compact("data"));
    }
    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:cruds',
            'contact'=>'required|numeric',
          ]);

          $data= Crud::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
          ]);
          return redirect()->route('cruds.index');
    }

    public function destroy($id){
        $data=Crud::find($id);
        $data->destroy($id);
        return redirect()->route('cruds.index');

    }
}

