<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Blogs;
use DB;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function posts()
    {
        $posts = Blogs::get();
        return view('posts', compact('posts'));
    }
  
    public function LikePost(Request $request){
        $post = Blogs::find($request->id);
        $response = auth()->user()->toggleLike($post);
  
        return response()->json(['success'=>$response]);
    }
 
 // public function DisLikePost(Request $request){

 //      DB::table('followables')->insert([
 //    ['relation' => $request->id]
 //                 ]);

 //        // return response()->json(['success'=>$Blogs]);
 //    }

      public function DisLikePost(Request $request){
        $post = Blogs::find($request->id);
        $response = auth()->user()->toggleLike($post);
  
        return response()->json(['success'=>$response]);
    }























     public function users()
    {
        $users = User::get();
        return view('users', compact('users'));
    }
 

    /**
     * Show the application of itsolutionstuff.com.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        $user = User::find($id);
        return view('usersView', compact('user'));
    }

 
    /**
     * Show the application of itsolutionstuff.com.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);
        return response()->json(['success'=>$response]);
    }

    


 
} 