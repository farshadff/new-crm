<?php

namespace App\Http\Controllers;

use App\ProductCat;
use Illuminate\Http\Request;

class ProductCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_cats = ProductCat::all();
        return view('admin.product_cats.index',compact('product_cats',$product_cats));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_cats = ProductCat::all();
        return view('admin.product_cats.create',compact('product_cats',$product_cats));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
        ]);

        $product_cats = ProductCat::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect('admin/product_cats/'.$product_cats->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCat  $productCat
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCat $productCat)
    {
        return view('admin.product_cats.show',compact('productCat',$productCat));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCat  $productCat
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCat $productCat)
    {
//        $product_cats = ProductCat::all();
////        $products = Product::all();
        return view('admin.product_cats.edit',compact('productCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCat  $productCat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCat $productCat)
    {
        //Validate
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $productCat->title = $request->title;
        $productCat->description = $request->description;
        $productCat->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('admin/product_cats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCat  $productCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCat $productCat)
    {
        $productCat->delete();
        return redirect('admin/product_cats');
    }
}
