<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $categories = Product::all()->groupBy('product_category');
        // dd($categories);
        return view('user.fikri.categoryfikri', compact('categories'));
    }

    public function detailCategory($categoryName)
    {
        $categories = Product::where('product_category', $categoryName)->get();
        // dd($namaCategory);
        $namaCategory = Category::where('category_name', $categoryName)->first();
        // dd($namaCategory);
        return view('user.fikri.categoryDetailFikri', compact('categories', 'namaCategory'));
    }


    public function detailProduk($id)
    {
        $product = Product::where('product_id', $id)->first();
        // dd($product);
        return view('user.fikri.produkDetailFikri', compact('product'));
    }



    // public function detail()
    // {
    //     g 
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
