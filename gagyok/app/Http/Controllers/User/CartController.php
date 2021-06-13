<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail; 
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class CartController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 

        
        
        // dd($order_details, $order);
        if (isset($orders)) {
            $order_details = OrderDetail::where('order_id', $orders->id)->get();
            return view('user.cart', compact('orders', 'order_details'));
        }
        else{
            return redirect('cart/empty');
        }
        // return view('user.cart');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function empty()
    {
        return view('user.emptyCart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // Fungsi MASUKKAN KERANJANG untuk Mengambil data dari user saat user menekan tambahkan ke keranjang
    public function store(Request $request, $idBarang)
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
        
        return redirect('cart');
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
        
        $order_details = OrderDetail::where('id', $id)->first();
        
        $order = Order::where('id', $request->order_id)-> first();
        $product = Product::where('product_id', $order_details->product_id)-> first();
        // dd($request, $id, $order_details, $order, $product);  
        $hargaLama = $order_details->price;
        $order_details->qty = $request->order_qty;
        $jumlah_hargaBaru = $request->order_qty*$product->product_price;
        $order_details->price = $jumlah_hargaBaru;
        $order->subtotal = $order->subtotal+($jumlah_hargaBaru-$hargaLama);
        $order_details -> update();
        $order->update();

        return redirect('cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $order_detail = OrderDetail::where('id', $id)->first();

        $order = Order::where('id', $order_detail->order_id)->first();
        $order->subtotal =$order->subtotal - $order_detail->price;
        $order -> update();

        $order_detail->delete();
        return redirect('cart');
    }
}
