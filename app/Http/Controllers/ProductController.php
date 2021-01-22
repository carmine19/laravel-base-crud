<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $all_product = Product::all();

        $data = [
            'products' => $all_product,
        ];

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_product = new Product();

        $new_product->name = $data['name'];
        $new_product->color = $data['color'];
        $new_product->size = $data['size'];
        $new_product->price = $data['price'];

        $new_product->save();

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $products= Product::find($id);
            if($products) {
                $data = [
                    'products' => $products
                ];
                return view('products.show', $data);
            }
            abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products= Product::find($id);
            if($products) {
                $data = [
                    'products' => $products
                ];
                return view('products.edit', $data);
            }
            abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products= Product::find($id);
        $data = $request->all();
        $products->update($data);


        return redirect()->route('products.show', ['product' => $products->id]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products= Product::find($id);
        $products->delete();
        return redirect()->route('products.index');

    }
}
