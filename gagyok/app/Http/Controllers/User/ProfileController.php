<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Personalinfo;



class ProfileController extends Controller
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
        $user = User::where('id', Auth::user()->id)->first();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        // dd($user);
        // dd($profile);
        return view('user.profile.index', compact('user','profile'));
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
        // dd($request);
        $user = User::where('id', Auth::user()->id)->first();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();
        // dd($user);
        // dd($profile);
        return view('user.profile.edit', compact('user','profile'));
        // return view('user.profile.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // dd($request);
        $user = User::where('id', Auth::user()->id)->first();
        $profile = Personalinfo::where('user_id', Auth::user()->id)->first();

        $user->name = $request->fname;
        $user->email = $request->email;
        $profile->user_email = $request->email;
        $profile->phone_number = $request -> notelp;
        $user->update();
        $profile->update();

        // dd($user);
        // dd($profile);

        return redirect()->route('profile');
        // return view('user.profile.edit');
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
