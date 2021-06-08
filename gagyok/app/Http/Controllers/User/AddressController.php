<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Personalinfo;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use DB;

class AddressController extends Controller
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
        return view('user.profile.alamat.empty');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd($id);
        return view('user.profile.alamat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        $provinces = DB::table("provinces")->pluck("name","id");
        // dd($user);
        // dd($profile);
        return view('user.profile.alamat.edit', compact('user','profile', 'provinces'));

    }

    public function City(Request $request)
        {
            $cities = DB::table("cities")
            ->where("province_id",$request->province_id)
            ->pluck("name","id", "postal_code");
            return response()->json($cities);
        }

    public function District(Request $request)
        {
            $districts = DB::table("districts")
            ->where("city_id",$request->city_id)
            ->pluck("name","id",);
            return response()->json($districts);
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.profile.alamat.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request);
        $user = User::where('id', Auth::user()->id)->first();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        // $kabupaten = City::where('name', $request->)->first();
        $provinsi = Province::where('id', $request->province)->first();
        $kabupaten = City::where('id', $request->city)->first();
        $kota = District::where('id', $request->district)->first();
 
        $profile->user_address = $request->alamat;
        $profile->phone_number = $request -> notelp;
    
        if (isset($provinsi)) {
            $profile->user_province = $provinsi->name;
        }
        if (isset($kabupaten)) {
            $profile->user_city = $kabupaten -> name;
            $profile->user_posCode = $kabupaten -> postal_code;
        }
        if (isset($kota)) {
            $profile->user_disctrict = $kota -> name;
        }

        $profile->update();

        // dd($user);
        // dd($profile);

        return redirect()->route('profile');
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
