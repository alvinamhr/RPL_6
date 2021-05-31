<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function postRegister(Request $request){
      //Retrieve the name input field
      $name = $request->input('name');
      
      //Retrieve the username input field
      $username = $request->username;
      echo '<br>';
      
      //Retrieve the password input field
      $password = $request->password;
      

     $password1 = $request->password1;
	
     if ( $password == $password1)
	{
		echo "<h4>Hello &nbsp;" .$name. "</h4>";
		echo "<br/>";
		echo "Your user name is: " .$username;
		echo "<br/>";
		echo "Password match and set Successfully.";
	}
	else
	{
	echo "password missmatch . Try again..";   
	}
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