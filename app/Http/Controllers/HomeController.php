<?php namespace App\Http\Controllers;
use App\users;
use App\tbl_coms;
use App\tbl_abouts;
use App\tbl_contacts;
use App\tbl_employments;
use App\tbl_educations;
use App\tbl_blogs;
use App\tbl_categorizes;
use Morilog\Jalali\Facades\jDate;
use Torann\GeoIP\GeoIPFacade;
use Illuminate\Http\Request;
class HomeController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	private $u;
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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{	
		/*$ip=$request->getClientIp();

		$url = "http://freegeoip.net/json/".$ip;
    $context = stream_context_create(array(
      'http' => array(
          'ignore_errors'=>true,
          'method'=>'GET'
        )
    ));
    $response = file_get_contents($url, false, $context);
    echo $response;  returns "[]"

        echo "Using ", memory_get_peak_usage(1), " bytes of ram.";*/

		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$u=users::find(1);
		return view('admin.index',compact('u','read_message','read_c'));
	}
	public function user()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$u=users::find(1);
		return view('admin.includes.user',compact('u','read_message','read_c'));
		
	}
	public function footer()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$f=tbl_abouts::find(1);
		$u=users::find(1);
		return view('admin.includes.footer',compact('u','f','read_message','read_c'));
		
	}
	public function msg()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$f=tbl_contacts::orderBy('id','desc')->get();
		$u=users::find(1);
		$time = jDate::forge('now')->format('%d %B  ،   %Y');
		return view('admin.includes.msg',compact('u','f','time','read_message','read_c'));
		
	}
	public function personal()
	{	
		$read_c=tbl_coms::where('reading','=',0)->get();
		$read_message=tbl_contacts::where('read','=',0)->get();
		$f=tbl_contacts::orderBy('id','desc')->get();
		$u=users::find(1);
		$time = jDate::forge('now')->format('%d %B  ،   %Y');
		$per=tbl_abouts::find(1);
		return view('admin.includes.personal',compact('u','f','time','read_message','per','read_c'));
		
	}
	public function employments()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$u=users::find(1);
		$e=tbl_employments::orderBy('id','desc')->get();
		return view('admin.includes.employments',compact('u','read_message','e','read_c'));
		
	}
	public function educations()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$u=users::find(1);
		$e=tbl_educations::orderBy('id','desc')->get();
		return view('admin.includes.educations',compact('u','read_message','e','read_c'));
		
	}
	public function blog()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$u=users::find(1);
		$e=tbl_categorizes::orderBy('id','desc')->get();
		$b=tbl_blogs::orderBy('id','desc')->simplePaginate(2);
		$items = tbl_categorizes::lists('name','name');

		return view('admin.includes.blog',compact('u','read_message','e','items','b','read_c'));
		
	}
	public function commn()
	{	
		$read_message=tbl_contacts::where('read','=',0)->get();
		$read_c=tbl_coms::where('reading','=',0)->get();
		$u=users::find(1);
		$e=tbl_blogs::orderBy('id','desc')->get();
		$commn=tbl_coms::orderBy('id','desc')->get();
		$time = jDate::forge('now')->format('%d %B  ،   %Y');

		return view('admin.includes.commen',compact('u','read_message','e','time','commn','read_c'));
		
	}

	
	public function down()
	{	
		
		$output = shell_exec('cd ..;php artisan down');


		echo "<pre>$output</pre><a href=/up>aaaa</a>";
		
	}

	

}



