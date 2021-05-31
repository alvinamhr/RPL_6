<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail; 
use Auth;
use Carbon\Carbon;
use Alert;


class OrderController extends Controller
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
        //
    }



// Fungsi MASUKKAN KERANJANG untuk Mengambil data dati user saat user menekan tambahkan ke keranjang
    public function keranjang(Request $request, $idBarang)
    {

        $product = Product::where('product_id', $idBarang)->first();
        $date = now()->setTimezone('Asia/Jakarta');

        //cek apakah pesanan melebihi jumlah stock
        if ($request->order_qty > $product-> product_stock) {
            return redirect('produk/'.$idBarang);
        }

        //cek validasi pesanan
        $cek_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 
        if (empty($cek_order)) 
        {
        // menyimpan ke database order
        $order = new Order;
        $order -> user_id = Auth::user()->id;
        $order -> order_date = $date;
        $order -> status = 0;
        $order -> subtotal = 0;
        $order -> save();
        // dd($order); ////ini untuk mengecek apakah querry order sudah betul apa tidak
        }


        // menyimpan ke database order detail
        $new_order = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 


        // cek pesanan detail jika sudah ada maka yang ada ditambah dengan inputan pesanan yang baru yang statusnya sama sama 0
        $cek_orderDetail = OrderDetail::where('product_id',$product->product_id)->where('order_id',$new_order->id)->first();
        if (empty($cek_orderDetail)) 
        {
            $order_detail = new OrderDetail;
            $order_detail->product_id = $product->product_id;
            $order_detail->order_id = $new_order->id;
            $order_detail->qty = $request->order_qty;
            $order_detail->price = $product->product_price*$request->order_qty;
            $order_detail-> save();
        }
        else 
        {
            $order_detail = OrderDetail::where('product_id', $product->product_id)->where('order_id', $new_order->id)->first();
            $order_detail->qty = $order_detail->qty + $request->order_qty;
            

            // Harga sekarang 
            $jumlah_hargaBaru = $product->product_price*$request->order_qty;
            $order_detail->price = $order_detail->price + $jumlah_hargaBaru;
            $order_detail->update();
        }
        
        // Total harga
        $order = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 
        $order -> subtotal = $order -> subtotal + ($product->product_price*$request->order_qty);
        $order -> update();
        // dd($order_detail); ////ini untuk mengecek apakah querry order sudah betul atau tidak

        
        
        Alert::success('SUKSES', 'Telah Ditambahkan Ke Keranjang'); //mau pake sweet alert tapi udah dicoba ribuan kali tetep ngak mau muncul alertnya
        // sweet alertnya dari link https://realrashid.github.io/sweet-alert/


        return redirect('category');
    }


    // FUNGSI CHECKOUT BARANG
    public function checkout()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 
        $order_details = OrderDetail::where('order_id', $orders->id)->get();
        // dd($order_details, $order);
        return view('user.fikri.checkoutFikri', compact('orders', 'order_details'));
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
