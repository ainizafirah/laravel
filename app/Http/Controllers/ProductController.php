<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{
    public function index()
    {
      $products = Product::all();
      return view ('shop.index', ['products'=> $products]);	
    }
     public function create ()
    {
       return view ('products.create');
    }

    public function show ($id)
    {
     $products = Product::find($id);
     return view ('products.show', compact('products'));
    }

    public function edit ($id)
    {
      $products = Product::find ($id);

      return view ('products.edit', compact('products')) ;
    }

    public function update ($id)
    {
     $products = Product::find ($id);

     $products->title = request('title');
     $products->price = request('price');
     $products->description = request('description');


     $products->save ();

     return redirect ('/products');
    }

    public function destroy ($id)
    {
     Product::find($id)->delete();

     return redirect ('/products');
    }
    public function store ()
    {
        $products = new product ();
        $products -> title = request ('title');
        $products-> price = request('price');
        $products -> description = request ('description');

        $products -> save ();

        return redirect ('/products');

    }
    
   
}
