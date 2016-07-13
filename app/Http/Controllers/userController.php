<?php namespace App\Http\Controllers;

use App\users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;

class userController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		$u=users::find(1);
		$f='u';
		return view('admin.includes.user',compact('f','u'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function getStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit()
	{
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		$u=users::find(1);

	     $e=$request->input('email');
	     $u->name=$request->input('name');
	      $p=$request->input('password');
	      $file=$request->input('filename');
	      if($file<>""){
	      

	  }

		  $u->email=$e;
		  if($u->password !=$p){
		 	 $u->password=Hash::make($p);
		  }
	     $u->save();



	}
	public function getUpdate(Request $request)
	{
		$this->validate($request,[
			'email' => 'Required',
			'password' => 'Required'

			]);
		$u=users::find(1);
		$u->email=$request->email;
		$u->password=Hash::make($request->password);
		$u->save();

		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
		//
	}

}
