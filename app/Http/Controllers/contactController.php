<?php namespace App\Http\Controllers;

use App\tbl_contacts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Morilog\Jalali\Facades\jDate;
class contactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contact=tbl_contacts::orderBy('id','asc')->get();
		return view('code.index',compact('contact'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postCreate(Request $request)
	{
		$this->validate($request,[
			'email' => 'Required'
			]);
		$date = jDate::forge('now')->format('%d %B  ،   %Y');
		$n=$request->input('name');
		$e=$request->input('email');
		$m=$request->input('message');
		$t=new tbl_contacts;
		$t->visitor_name=$n;
		$t->visitor_email=$e;
		$t->visitor_message=$m;
		$t->fa_date=$date;
		$t->save();
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
	public function getEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate($id)
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
		$t=tbl_contacts::find($id);
		$t->delete();
		return redirect('/home/msg');

	}
	public function getRead($id)
	{
		$t=tbl_contacts::find($id);
		$t->read=1;
		$t->save();
		return redirect('/home/msg');

	}

}
