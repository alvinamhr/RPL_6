<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Personalinfo;
use App\Models\Province;
use App\Models\City;
use App\Models\District;
use DB;
use Image;

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
    
    public function list()
    {
        return view('user.profile.alamat.daftaralamat');
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
        
        if (isset($request->alamat)) {
            $profile->user_address = $request->alamat;
        }
        if (isset($request->notelp)) {
            $profile->phone_number = $request -> notelp;
        }
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

        if ($request->hasFile('image')) 
        {

            $validatedData = $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        
               ]);
               $image = $request->file('image');
               $oldName= $profile->user_picture;
               $oldfile_path ="public/assets/image/profile/".$oldName;
            //    dd($oldName);
               Storage::delete($oldfile_path);
               $name = $request->file('image')->hashname();
               $request->file('image')->storeAs('public/assets/image/profile', $name);
            //    $request->file('image')->store('public/assets/image/profile');
            //    $request->file('image')->store('public/assets/image/profile');
            $profile->user_picture = $name;
            // $profile->update();
            //    dd($request->file('image')->storeAs('/image/profile', $name));
        
               

         }

        $profile->update();

        // dd($user);
        // dd($profile);

        return redirect()->route('profile')->with('status', 'Image Has been uploaded successfully');
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
