<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $alldata=Client::get()->all();
        return view('products.index',compact("alldata"));
    }

    public function create(){
        return view('products.create');

    }

    public function store(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'detail' => 'required|string',
            'image' => 'required',
        ]);

        // Upload image

            $file = $request->image;
            $extension = $request->image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'products';
            $file->move($path, $filename);


            $data = Client::create([
                'name' => $request->name,
                'detail' => $request->detail,
                'image' => $path . '/' . $filename, // Corrected path separator
            ]);
            $alldata=Client::get()->all();
            return redirect()->route('products.index');
    }

    public function edit($id){
        $data=Client::find($id);
        return view('products.edit',compact("data"));
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|string',
            'detail' => 'required|string',
            'image' => 'required',
        ]);

        // Update image

            $file = $request->image;
            $extension = $request->image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'products';
            $file->move($path, $filename);


            $data = Client::find($id)->update([
                'name' => $request->name,
                'detail' => $request->detail,
                'image' => $path . '/' . $filename, // Corrected path separator
            ]);
            $alldata=Client::get()->all();
            return redirect()->route('products.index');
    }

    public function destroy($id){
        $data=Client::find($id);
        $data->destroy($id);
        return redirect()->route('products.index');
    }
}



