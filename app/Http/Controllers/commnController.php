<?php namespace App\Http\Controllers;

use App\tbl_coms;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Morilog\Jalali\Facades\jDate;
use Illuminate\Http\Request;

class commnController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$this->validate($request,[
			'email'=>'required'
			]);
		$email=$request->input('email');
	    $t=$request->input('type');
		$name=$request->input('name');
		$message=$request->input('message');;
		$date = jDate::forge('now')->format('%d %B  ،   %Y');
		$o=new tbl_coms;
		$o->date=$date;
		$o->name=$name;
		$o->email=$email;
		$o->commn=$message;
		$o->type=$t;
		$o->save();
		return redirect('/');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
		$o=tbl_coms::find($id);
		$o->delete();
		return redirect('/home/commen');
	}
	public function getRead($id)
	{
		$o=tbl_coms::find($id);
		$o->reading=true;
		$o->save();
		return redirect('/home/commen');

	}

}
