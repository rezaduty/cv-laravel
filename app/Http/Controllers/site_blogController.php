<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_blogs;
use Illuminate\Http\Request;
use Morilog\Jalali\Facades\jDate;

class site_blogController extends Controller {

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
		$date = jDate::forge('now')->format('%d %B  ،   %Y');
		$b=new tbl_blogs;	
		$b->title=$request->title;
		$b->content=$request->messageArea;
		$b->categorizes=$request->item_id;
		$b->tag=$request->item_id;
		$b->date=$date;
		$b->save();
		return redirect('home/blog');
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
	public function getEdit($id)
	{
		$c=tbl_blogs::find($id);
		return view('admin.blog_ed',compact('c'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate($id,Request $request)
	{
		$c=tbl_blogs::find($id);
		$c->title=$request->title;
		$c->content=$request->messageArea;
		$c->save();
		return view('admin.home');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getDestroy($id)
	{
		$l=tbl_blogs::find($id);
		$l->delete();
		return redirect('/home/blog');
	}

}
