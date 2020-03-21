<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use DB;
use Auth;
use App\Category;
use App\Department;
use App\Subcatagory;
use App\ServiceType;
use App\Catagorylist;

class AjaxController extends Controller
{
	public function __construct()
    {
        // $this->middleware('auth'); 
    }
 
     public function getcatagoryBydepartment(Request $request)
    {
        // echo $request->item_catagory;
        // exit;
    // $Catagorylist= Catagorylist::where('department_name',$request->department_name)->get();
            $Catagorylist=DB::table('catagory_lists')
            ->join('categories', 'categories.id', '=', 'catagory_lists.catagory_name')
            ->where('department_name',$request->department_name)
            ->select('categories.catagory_name','catagory_lists.catagory_name as cat_id')
            ->groupBy('categories.catagory_name','catagory_lists.catagory_name')
            ->get();
        return json_encode($Catagorylist);

    }   

    public function getsubcatagoryBycatagory(Request $request)
    {
        // echo $request->item_catagory;
        // exit;
    // $Catagorylist= Catagorylist::where('department_name',$request->department_name)->get();
            $SubCatagorylist=DB::table('categories')
            ->join('subcatagories','subcatagories.catagory_name', '=', 'categories.id')
            ->where('subcatagories.catagory_name',$request->catagory_name)
            ->select('subcatagories.*','categories.*','subcatagories.id as sbid')
            ->get();
        return json_encode($SubCatagorylist);

    }

    public function getBlogComments(Request $request)
    {
        $CommentList=DB::table('comments')
        ->join('users','comments.user_id', '=', 'users.id')
        ->where([['comments.blog_id','=',$request->blog_id]])

         ->select('comments.*','users.*','users.name as uname','comments.comment_description as cds','users.profile_image as profile_img')
            ->get();
        return json_encode($CommentList);

    }

}
 