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



class CheckoutController extends Controller
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

        // $user = User::where('id', Auth::user()->id)->first();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        $orders = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 
        return view('user.checkout', compact('orders','profile'));
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
    public function pesan(Request $request)
    {
        // dd($request);
        $orders = Order::where('user_id', Auth::user()->id)->where('status',0)->where('id',$request->id)->first();
        $orders->status = 1;
        $orders->subtotal= $request->totalBayar;
        $date = now()->setTimezone('Asia/Jakarta');
        $orders -> order_date = $date;
        //  dd($orders);
        $orders -> update();
        return redirect()->route('notification');
    }

    public function ongkir(Request $request)
    {
        // dd($request);
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        $orders = Order::where('user_id', Auth::user()->id)->where('status',0)->first(); 
        $jumlah = $orders->subtotal+$request->ongkir;
        // dd($orders,$profile, $jumlah, $request);
        // dd($jumlah);
        return view('user.checkout', compact('orders','profile', 'jumlah', 'request'));
        // return redirect()->route('notification');
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
