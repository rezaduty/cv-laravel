<?php namespace App\Http\Controllers;

use App\tbl_categorizes;
use App\tbl_coms;
use App\tbl_abouts;
use App\tbl_educations;
use App\tbl_employments;
use App\tbl_blogs;
use App\tbl_contacts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class blogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$about=tbl_abouts::all();
		$employment=tbl_employments::all();
		$contact=tbl_contacts::all();
		$education=tbl_educations::all();
		$blog=tbl_blogs::simplePaginate(4);
		if(tbl_coms::all())
			$com=tbl_coms::where('reading','=',1)->get();
		$cat=tbl_categorizes::all();
		return view('code.index',compact('blog','contact','education','employment','about','com','cat'));
	}
	public function cate($name)
	{	
		$about=tbl_abouts::all();
		$employment=tbl_employments::all();
		$contact=tbl_contacts::all();
		$education=tbl_educations::all();
		$blog=tbl_blogs::where('categorizes','=',$name);
		$blog=$blog->simplePaginate(4);
		if(tbl_coms::all())
			$com=tbl_coms::where('reading','=',1)->get();
		$cat=tbl_categorizes::all();
		return view('code.index',compact('blog','contact','education','employment','about','com','cat'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function destroy($id)
	{
		//
	}

}
