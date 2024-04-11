<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index(){
    $products=Product::get()->all();


    return view('products.index',compact('products'));
  }
  public function create(){
    return view("products.create");
  }
  public function store(Request $request){

     $request->validate([
        'name'=>'required',
        'description'=>'required',
        'category'=>'required',
        'quantity'=>'required|decimal:0,2',
        'price'=>'required|decimal:0,2',
        'image'=>'required|mimes:jpeg,jpg,png,gif|max:1000'
     ]);
     //upload image
    $data = time().'.'.$request->image-> extension();
    $request->image->move(public_path('products'),$data);

    $product = new Product;
    $product->image=$data;
    $product->name=$request->name;
    $product->description=$request->description;
    $product->category=$request->category;
    $product->quantity=$request->quantity;
    $product->price=$request->price;

    $product->save();

     return redirect (route('products.index'))->withSuccess('Product Created!!!!');
  }


}
