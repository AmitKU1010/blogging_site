<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\ChoosenTopics;
use Auth;
use App\User;
use Redirect;
use App\Subcatagory;
use DB;
use App\Blogs; 
use DateTime;
use DateInterval;
use App\Comment;
  
class UserController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        
        // $Own_Blogs=DB::table('Blogs')->where('user_id',Auth::id())->get();


        // $Own_Blogs=DB::table('blogs')->leftJoin('comments','blogs.id','comments.blog_id')->select('blogs.*','comments.*','blogs.id as blog_id')->get();

        // var_dump($Own_Blogs);
        // dd($Own_Blogs);



         $Own_Blogs =DB::table('blogs')
         ->join('users','users.id','blogs.user_id')
         ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
         ->where('blogs.user_id',Auth::id())
         ->get();
 
         
         
         
         
        //  $Own_Blogs =Blogs::where('user_id', Auth::id())->get();

        // $comments=DB::table('comments')->get();

        // dd($comments);

         // $comments = Comment::where('user_id', Auth::id())->get();

        $Trending_Blogs = DB::table('blogs')
        ->join('users','users.id','blogs.user_id')
        ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
        ->get();

        $users = User::orderBy('id', 'desc')->take(5)->get();



        // $Count_blog=DB::table('followables')->where('user_id',Auth::id())->get();
        return view('user.newsfeed', compact('Own_Blogs','Trending_Blogs','users'));

 
        // return view('user.newsfeed')->with('Own_Blogs',$Own_Blogs);
    } 
 
    public function edit_profile()
    {
        $User=User::all();
        $Category=Category::all();
        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();
 
        return view('user.edit_profile')->with('User',$User)->with('Subcatagory',$Subcatagory)
        ->with('Category',$Category);
    }

    public function blog_post_special()
    {
        $User=User::all();
        $Category=Category::all();
        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();
 
        return view('user.blog_post_special')->with('User',$User)->with('Subcatagory',$Subcatagory)
        ->with('Category',$Category);
    }
 
    public function update_profile(Request $request)
    {  

             $this->validate($request,[
                'name' => 'required',
                'email' => 'required',


            ],[
                'name.required' => 'You Can"t Make Your Name Empty!!',
                'email.required' => 'You Can"t Make Your Number Empty!!',

            ]);
 

       $id=Auth::id();
       $User=User::find($id);
       $User->name=$request->input('name');
       $User->email=$request->input('email');
       $User->email_new=$request->input('email_new');
       $User->dob=$request->input('dob');
       $User->gender=$request->input('gender');
       $User->about_me=$request->input('about_me');
       $User->country=$request->input('country');
       $User->city=$request->input('city');
       $real=$request->file('profile_image');

       if($real!='')
       {
       $filename = time().'.'.$real->getClientOriginalExtension();
       $destinationPath = public_path('/images/profile_image');
       $real->move($destinationPath, $filename);
       $User->profile_image=$filename;
       }

       $User->save();
      

       return Redirect::back()->with('message','Profile Updated Successfully !');
    }

    public function registeraftermodal()
    {   
        $Category=Category::all();

        return view('user.register-after-modal')->with('Category',$Category);
  
    } 
 
    public function blog_post()
    {   


        return view('user.blog_post');
  
    }

    public function comments(Request $request)
    {  
        $Comment=new Comment();

        $Comment->user_id=Auth::id();
        $Comment->blog_id=$request->input('blog_id');
        $Comment->comment_description=$request->input('comment');
        $Comment->save();

       return Redirect::back()->with('message','Profile Updated Successfully !');


   

    }

    public function other_user_details($id)
    {


    $user=User::find($id);


        // dd($User);
    //   return view('user.other_user', compact('user'));

    return view('user.other_user')->with('user',$user);



    }


      public function update_blog(Request $request)
    {   

        $Blogs=new Blogs();
        $Blogs->user_id=Auth::id();
        $Blogs->catagory_name=$request->input('catagory_name');
        $Blogs->subcatagory_name=$request->input('subcatagory_name');
        $Blogs->post_caption=$request->input('post_caption'); 
        $Blogs->post_description=$request->input('post_description');

        // dd($Blogs->post_description);

        $real=$request->file('post_image');

        
        if($real !='')
        {
        
        $filename = time().'.'.$real->getClientOriginalExtension();
        $destinationPath = public_path('/images/post_img');
        $real->move($destinationPath, $filename);
        $Blogs->post_image=$filename;
        }

        $real_two=$request->file('post_image_two');
        if($real_two !='')
        {
        $filename2 = time().'.'.$real_two->getClientOriginalExtension();
        $destinationPath2 = public_path('/images/post_img');
        $real_two->move($destinationPath2, $filename2);
        $Blogs->post_image_two=$filename2;
        }

        $real_three=$request->file('post_image_three');
        if($real_three !='')
        {
        $filename3 = time().'.'.$real_three->getClientOriginalExtension();
        $destinationPath3 = public_path('/images/post_img');
        $real_three->move($destinationPath3, $filename3);
        $Blogs->post_image_three=$filename3;
        }
 
        $real_four=$request->file('post_image_four');
        if($real_four !='')
        {
        $filename_four = time().'.'.$real_four->getClientOriginalExtension();
        $destinationPath_four = public_path('/images/post_img');
        $real_four->move($destinationPath_four, $filename_four);
        $Blogs->post_image_four=$filename_four;
        }



        $Blogs->save();
       return Redirect::back()->with('message','Profile Updated Successfully !');
    }

 
    public function user_search(Request $request)
    {

      $requested_name=$request->input('requested_name');   
      $users = User::where('name','LIKE','%'.$requested_name.'%')->get();   
      
      
      $Own_Blogs =DB::table('blogs')
      ->join('users','users.id','blogs.user_id')
      ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
      ->where('blogs.user_id',Auth::id())
      ->get();

     $Trending_Blogs = DB::table('blogs')
     ->join('users','users.id','blogs.user_id')
     ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
     ->get();

      return view('user.newsfeed', compact('Own_Blogs','Trending_Blogs','users'));

 
    }

    public function choosen_topic_store(Request $request)
    {
        $catagory_name=$request->input('catagory_name');
        $catagory_btn=$request->input('catagory_btn');
        $Auth_id=Auth::id();

        for($i=0;$i<count($request->catagory_name);$i++)
        {
        $ChoosenTopics=new ChoosenTopics();
        $ChoosenTopics->user_id=Auth::id();
        $ChoosenTopics->choosen_topics=$request->catagory_name[$i];
        $cat_btn=$request->catagory_btn[$i];
             if($cat_btn=='Follow')
              {
          $ChoosenTopics->status=0;  
              }
             else
              {
          $ChoosenTopics->status=1;  
              }
          $ChoosenTopics->save();
        }

        $Own_Blogs = Blogs::get();

        return view('user.newsfeed', compact('Own_Blogs'));
       

    }
}
