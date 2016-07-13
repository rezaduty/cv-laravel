<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tbl_employments;
use Morilog\Jalali\Facades\jDate;
class employmentController extends Controller {

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
	public function getCreate()
	{
		return view('admin.em_cr');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postStore(Request $request)
	{
		$em=new tbl_employments;
		$t=$request->input('title');
		$c=$request->input('company');
		$con=$request->input('context');
		$em->title=$t;
		$em->company_name=$c;
		$em->context=$con;
		$time = jDate::forge('now')->format('%d %B  ،   %Y');
		$em->date=$time;
		$em->save();
		return redirect('/home/employments');
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
		$t=tbl_employments::find($id);
		$t->delete();
		return redirect('home/employments');
	}

}
