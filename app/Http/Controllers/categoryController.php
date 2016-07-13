<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_categorizes;

use Illuminate\Http\Request;

class categoryController extends Controller {

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
		$c=new tbl_categorizes;
		$c->name=$request->name;
		$c->save();
		return redirect('/home/blog');
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
	public function postEdit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getUpdate()
	{
		$id=$_GET['code'];
		$c=tbl_categorizes::find($id);
		$c->name=$_GET['name'];
		$c->save();


	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
		$c=tbl_categorizes::find($id);
		$c->delete();
		return redirect('/home/blog');

	}

}
