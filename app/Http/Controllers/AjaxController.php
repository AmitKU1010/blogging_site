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
use App\Comment;
use App\BlogNotification;
use App\User;




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
         ->orderBy('comments.id', 'desc')
         ->get();
        return json_encode($CommentList);

    }

    public function submit_comment(Request $request)
    {
        // comment Inesrt 
        $comment=new Comment();
        $comment->user_id=Auth::id();
        $comment->blog_id=$request->blog_id;
        $comment->comment_description=$request->comment_input;
        $comment->save();
        // comment Inesrt 
        


        //notification insert
        $BlogNotification=new BlogNotification();
        $BlogNotification->comment_person_id=Auth::id();
        $BlogNotification->blog_id=$request->blog_id;
        $BlogNotification->noti_type="commented";
        $BlogNotification->noti_desc=$request->comment_input;
        $BlogNotification->save();
        //notification insert

        $CommentList=DB::table('comments')
        ->where([['comments.blog_id','=',$request->blog_id]])
        ->select('comments.*','comments.comment_description as cds')
        ->get();
 
        return json_encode($CommentList);
    }

    public function getBlognotification()
    { 
    //  $BlogNotification=DB::table('blogs')
    //                   ->join('comments','blogs.id','comments.blog_id')
    //                   ->join('notifications','notifications.blog_id','blogs.id')
    //                   ->join('users','users.id','notifications.comment_person_id')
    //                   ->where([['blogs.user_id','=',Auth::id()]])
    //                   ->select('comments.*','users.*','notifications.*','users.name as username')
    //                   ->orderBy('notifications.id', 'desc')
    //                   ->take(5)
    //                   ->get();


                    //   $BlogNotification=DB::table('blogs')
                    //   ->join('notifications','blogs.id','notifications.blog_id')
                    //   ->where([['blogs.user_id','=',Auth::id()]])
                    //   ->get();


                    $BlogNotification=DB::table('blogs')
                      ->join('notifications','blogs.id','notifications.blog_id')
                      ->join('users','users.id','notifications.comment_person_id')
                      ->where([['blogs.user_id','=',Auth::id()],['notifications.comment_person_id','!=',Auth::id()]])
                      ->select('blogs.*','notifications.*','users.*','users.name as uname','blogs.post_caption as blogcaption')
                      ->get();
                    //   ->select('notifications.*','blogs.*','users.profile_image as profile_img','users.name as uname','notifications.noti_type as cds')

                    //   dd($BlogNotification);

                    

             


                     

        return json_encode($BlogNotification);

    }

}
 