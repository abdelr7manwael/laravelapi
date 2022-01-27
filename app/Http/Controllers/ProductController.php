<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return product::all();
    }



    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|string",
            'price'=>"required|numeric"
        ]);
         return product::create($request->all());
    }


    public function show($id)
    {
        return product::find($id);
    }



    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>"required|string",
            'price'=>"required|numeric"
        ]);

        $product = product::find($id);
        $product->update($request->all());
        return $product;
    }


    public function destroy($id)
    {
        return product::destroy($id);
    }
}
