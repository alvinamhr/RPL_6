<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail; 
use Auth;
use App\Models\Personalinfo;
use App\Models\User;

class OrderController extends Controller
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

    public function index()
    {
        //
    }

    public function nol()
    {
        return view('user.detail-pesanan.belum-bayar');
    }

    public function satu()
    {
        return view('user.detail-pesanan.berhasil-bayar');
    }
    
    public function pembayarannol()
    {
        return view('user.pembayaran.menunggu');
    }

    public function pembayaransatu()
    {
        return view('user.pembayaran.berhasil');
    }
    
    public function choose()
    {
        return view('user.pembayaran');
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
        $order = Order::where('id', $id)->where('status','>',0)->first(); 
        $order_details = OrderDetail::where('order_id', $id)->get();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        // dd($order, $order_details);
            // return view('user.cart', compact('orders', 'order_details'));
        return view('user.detail-pesanan.statusPesanan',compact('order', 'order_details', 'profile'));
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
