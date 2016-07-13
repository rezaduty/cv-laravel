<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tbl_abouts;
use App\users;
use Illuminate\Http\Request;

class aboutController extends Controller {

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
	public function postEdit(Request $request)
	{
		$n=$request->name;
		$b=$request->birthday;
		$e=$request->email;
		$w=$request->website;
		$c=$request->context;
		$p=$request->phone;
		$a=$request->address;
		$t=$request->testimonials;
		$f=$request->file('image')->getClientOriginalName();

		$request->file('image')->move(public_path('image'),'profile.jpg');
		$d=tbl_abouts::find(1);
		$d->img_patch=$f;
		$d->name=$n;
		$d->birthday=$b;
		$d->email=$e;
		$d->website=$w;
		$d->context=$c;
		$d->phone=$p;
		$d->address=$a;
		$d->testimonials=$t;
		$d->save();
		return redirect('/home/personal');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$user=tbl_abouts::find(1);
		$user->footer=$_POST['footer'];
		$user->save();

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
