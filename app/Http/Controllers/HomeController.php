<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Blogs;
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
} 