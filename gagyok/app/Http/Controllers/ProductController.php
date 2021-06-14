<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail; 

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // user harus login
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        return view ('user.category.product');
    }
    

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
    public function cari(Request $request)
    {
        // dd($request);
        // Get the search value from the request
        $search = $request->search_text;

    // Search in the title and body columns from the posts table
        $results = Product::where('product_name', 'LIKE', "%".$search."%")->orWhere('product_short_desc', 'LIKE', "%".$search."%")->orWhere('product_long_desc', 'LIKE', "%".$search."%")->orWhere('product_category', 'LIKE', "%".$search."%")->get();
        // dd($results); 
        return view('user.cari',compact("results", "search"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // menampilkan detail produk
    public function show($id)
    {
        $product = Product::where('product_id', $id)->first();
        $kategori = $product->product_category;
        $categories = Product::where('product_category', $kategori)->inRandomOrder()->limit(5)->get();
        // dd($categories);
        return view('user.category.product', compact('product', 'categories'));
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
