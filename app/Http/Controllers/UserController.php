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

        $users = User::orderBy('id', 'asc')->take(5)->get();

         $follow_count=DB::table('users')->join('followables','users.id','followables.followable_id')->where('followables.followable_id',Auth::id())->get();

        $cc=count($follow_count);

        $comment_count=DB::table('blogs')->join('comments','blogs.id','comments.blog_id')
        ->select(DB::raw('count(comments.blog_id) as user_count, blogs.id'))
        ->groupBy('blogs.id')
        ->get();

        // dd($comment_count);

        $comment_count=DB::table('blogs')->join('comments','blogs.id','comments.blog_id')
        ->select(DB::raw('count(comments.blog_id) as user_count, blogs.id'))
        ->groupBy('blogs.id')
        ->get();

        $likes_count=DB::table('blogs')->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        ->select(DB::raw('blogs.id as like_blog_id,count(like_dislikes.like) as likes_count'))
        ->where('like_dislikes.like','=',1)
        ->groupBy('like_dislikes.blog_id','blogs.id')
        ->get();

        // dd($likes_count);

         $dislikes_count=DB::table('blogs')->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        ->select(DB::raw('blogs.id as like_blog_id,count(like_dislikes.like) as dislikes_count'))
        ->where('like_dislikes.like','=',0)
        ->groupBy('like_dislikes.blog_id','blogs.id')
        ->get();



       

         $notifications_counter=DB::table('notifications')
        ->join('blogs','blogs.id','notifications.blog_id')

        ->where([
        ['blogs.user_id', '=', Auth::id()],
        ['notifications.comment_person_id', '!=',  Auth::id()],])
        ->whereNull('notifications.notification_counter_status')
        ->get();

        $noti_counter=count($notifications_counter);


         $Category=Category::all();

        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();


        // $like_percentage=DB::table('blogs')
        // ->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        // ->where('like_dislikes.like','=',1)
        // ->get();

        // $dislike_percentage=DB::table('blogs')
        // ->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        // ->where('like_dislikes.like','=',0)
        // ->get();

        // dd($dislike_percentage);

        // $Count_blog=DB::table('followables')->where('user_id',Auth::id())->get();
        return view('user.newsfeed', compact('Own_Blogs','Trending_Blogs','users','cc','comment_count','likes_count','dislikes_count','noti_counter','Category','Subcatagory'));

 
        // return view('user.newsfeed')->with('Own_Blogs',$Own_Blogs);
    } 

    public function newsfeed_after_search(Request $request)
    {

         $search_post_name=$request->input('search_post_name');   

        

         $Own_Blogs =DB::table('blogs')
         ->join('users','users.id','blogs.user_id')
         ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
         ->where('blogs.user_id',Auth::id())
         ->get();
 
 

        $Trending_Blogs = DB::table('blogs')
        ->join('users','users.id','blogs.user_id')
        ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
        ->where('blogs.post_caption', 'LIKE','%'.$search_post_name.'%')
        ->get();

         // dd($Trending_Blogs);

        $users = User::orderBy('id', 'asc')->take(5)->get();

         $follow_count=DB::table('users')->join('followables','users.id','followables.followable_id')->where('followables.followable_id',Auth::id())->get();

        $cc=count($follow_count);

        $comment_count=DB::table('blogs')->join('comments','blogs.id','comments.blog_id')
        ->select(DB::raw('count(comments.blog_id) as user_count, blogs.id'))
        ->groupBy('blogs.id')
        ->get();

         $notifications_counter=DB::table('notifications')
        ->join('blogs','blogs.id','notifications.blog_id')

        ->where([
        ['blogs.user_id', '=', Auth::id()],
        ['notifications.comment_person_id', '!=',  Auth::id()],])
        ->whereNull('notifications.notification_counter_status')
        ->get();

        $noti_counter=count($notifications_counter);

        $likes_count=DB::table('blogs')->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        ->select(DB::raw('blogs.id as like_blog_id,count(like_dislikes.like) as likes_count'))
        ->where('like_dislikes.like','=',1)
        ->groupBy('like_dislikes.blog_id','blogs.id')
        ->get();

         $dislikes_count=DB::table('blogs')->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        ->select(DB::raw('blogs.id as like_blog_id,count(like_dislikes.like) as dislikes_count'))
        ->where('like_dislikes.like','=',0)
        ->groupBy('like_dislikes.blog_id','blogs.id')
        ->get();

        $Category=Category::all();


        return view('user.newsfeed', compact('Own_Blogs','Trending_Blogs','users','cc','comment_count','noti_counter','likes_count','dislikes_count','Category'));

    }
    public function edit_profile()
    {
        $User=User::all();
        $Category=Category::all();
        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();

        // $users = User::whereIn('id', [1, 2, 3])->get();
 

        $users = User::join('followables', 'users.id',   '=', 'followables.followable_id')
                 ->select('users.*', 'followables.*')
                 ->where('users.id','!=',Auth::id())
                 ->get();


    //     $users = User::with("manufacturer")
    //     ->whereHas('followables',function($query) use ($needle){
    // $query->where("name","like","%{$needle}%");

       



         $follow_count=DB::table('users')->join('followables','users.id','followables.followable_id')->where('followables.followable_id',Auth::id())->get();

        $cc=count($follow_count);

 
        return view('user.edit_profile')->with('User',$User)->with('Subcatagory',$Subcatagory)
        ->with('Category',$Category)->with('users',$users)->with('cc',$cc);
    }
 
    public function blog_post_special()
    {
        $User=User::all();
        $Category=Category::all();
        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();

        $follow_count=DB::table('users')->join('followables','users.id','followables.followable_id')->where('followables.followable_id',Auth::id())->get();

        $cc=count($follow_count);

 
        return view('user.blog_post_special')->with('User',$User)->with('Subcatagory',$Subcatagory)
        ->with('Category',$Category)->with('cc',$cc)->with('message','Your Blog Posted Successfully !');
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

        if(Auth::id() != $id)
        {
        $user=User::find($id);
         $follow_count=DB::table('users')->join('followables','users.id','followables.user_id')->where('followables.user_id',$id)->get();

        $cc=count($follow_count);

        return view('user.other_user')->with('user',$user)->with('cc',$cc);
        }
        else
        {


        $follow_count=DB::table('users')->join('followables','users.id','followables.user_id')->where('followables.user_id',$id)->get();

        $cc=count($follow_count);

        $User=User::all();
        $Category=Category::all();
        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();

        $users = User::orderBy('id', 'asc')->take(5)->get();

        return view('user.edit_profile')->with('User',$User)->with('Subcatagory',$Subcatagory)
        ->with('Category',$Category)->with('cc',$cc)->with('users',$users);

        }
        



    }

    public function modify_blog_update(Request $request)
    {
        $blog_id_updateModal=$request->input('blog_id_updateModal');
        $Blogs=Blogs::find($blog_id_updateModal);
        // $Blogs->catagory_name=$request->input('catagory_name');
        // $Blogs->subcatagory_name=$request->input('subcatagory_name');
        $Blogs->post_caption=$request->input('post_caption'); 
        $Blogs->post_description=$request->input('post_description');

        // dd($Blogs->post_description);

        $real_input_file=$request->file('post_image');

        // dd($real_input_file);

        
       

        if ( ! isset($real_input_file[0])) 
        {
            $real_input_file[0] = null;
        }
         else
        {
        $real=$real_input_file[0];

        // var_dump($real);

        $filename = time().'a'.'.'.$real->getClientOriginalExtension();
        $destinationPath = public_path('/images/post_img');
        $real->move($destinationPath, $filename);
        $Blogs->post_image=$filename; 
        }


        if ( ! isset($real_input_file[1])) 
        {
        $real_input_file[1] = null;
        }
        else
        {
        $real_two=$real_input_file[1];

        // dd($real_two);


        $filename2 = time().'b'.'.'.$real_two->getClientOriginalExtension();
        $destinationPath2 = public_path('/images/post_img');
        $real_two->move($destinationPath2, $filename2);
        $Blogs->post_image_two=$filename2;  
        }

         if ( ! isset($real_input_file[2])) 
        {
        $real_input_file[2] = null;
        }
        else
        {

        $real_three=$real_input_file[2];

        // dd($real_three);



        $filename3 = time().'c'.'.'.$real_three->getClientOriginalExtension();
        $destinationPath3 = public_path('/images/post_img');
        $real_three->move($destinationPath3, $filename3);
        $Blogs->post_image_three=$filename3; 
        }


         if ( ! isset($real_input_file[3])) 
        {
        $real_input_file[3] = null;
        }
        else
        {
        $real_four=$real_input_file[3];

        // dd($real_four);

        $filename_four = time().'d'.'.'.$real_four->getClientOriginalExtension();
        $destinationPath_four = public_path('/images/post_img');
        $real_four->move($destinationPath_four, $filename_four);
        $Blogs->post_image_four=$filename_four;  
        }


        $Blogs->save();
       return Redirect::back()->with('message','Updated Successfully !');


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

        $real_input_file=$request->file('post_image');

        // dd($real_input_file);

        
       

        if ( ! isset($real_input_file[0])) 
        {
            $real_input_file[0] = null;
        }
         else
        {
        $real=$real_input_file[0];

        // var_dump($real);

        $filename = time().'a'.'.'.$real->getClientOriginalExtension();
        $destinationPath = public_path('/images/post_img');
        $real->move($destinationPath, $filename);
        $Blogs->post_image=$filename; 
        }


        if ( ! isset($real_input_file[1])) 
        {
        $real_input_file[1] = null;
        }
        else
        {
        $real_two=$real_input_file[1];

        // dd($real_two);


        $filename2 = time().'b'.'.'.$real_two->getClientOriginalExtension();
        $destinationPath2 = public_path('/images/post_img');
        $real_two->move($destinationPath2, $filename2);
        $Blogs->post_image_two=$filename2;  
        }

         if ( ! isset($real_input_file[2])) 
        {
        $real_input_file[2] = null;
        }
        else
        {

        $real_three=$real_input_file[2];

        // dd($real_three);



        $filename3 = time().'c'.'.'.$real_three->getClientOriginalExtension();
        $destinationPath3 = public_path('/images/post_img');
        $real_three->move($destinationPath3, $filename3);
        $Blogs->post_image_three=$filename3; 
        }


         if ( ! isset($real_input_file[3])) 
        {
        $real_input_file[3] = null;
        }
        else
        {
        $real_four=$real_input_file[3];

        // dd($real_four);

        $filename_four = time().'d'.'.'.$real_four->getClientOriginalExtension();
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

        $Own_Blogs =DB::table('blogs')
         ->join('users','users.id','blogs.user_id')
         ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
         ->where('blogs.user_id',Auth::id())
         ->get();
 

        $Trending_Blogs = DB::table('blogs')
        ->join('users','users.id','blogs.user_id')
        ->select('users.*','blogs.*','blogs.id as real_blog_id','blogs.user_id as real_user_id')
        ->get();

         $follow_count=DB::table('users')->join('followables','users.id','followables.followable_id')->where('followables.followable_id',Auth::id())->get();

        $cc=count($follow_count);


           $comment_count=DB::table('blogs')->join('comments','blogs.id','comments.blog_id')
        ->select(DB::raw('count(comments.blog_id) as user_count, blogs.id'))
        ->groupBy('blogs.id')
        ->get();

        $users = User::orderBy('id', 'asc')->take(5)->get();



        $likes_count=DB::table('blogs')->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        ->select(DB::raw('blogs.id as like_blog_id,count(like_dislikes.like) as likes_count'))
        ->where('like_dislikes.like','=',1)
        ->groupBy('like_dislikes.blog_id','blogs.id')
        ->get();

        // dd($likes_count);

         $dislikes_count=DB::table('blogs')->leftJoin('like_dislikes','blogs.id','like_dislikes.blog_id')
        ->select(DB::raw('blogs.id as like_blog_id,count(like_dislikes.like) as dislikes_count'))
        ->where('like_dislikes.like','=',0)
        ->groupBy('like_dislikes.blog_id','blogs.id')
        ->get();

       

         $notifications_counter=DB::table('notifications')
        ->join('blogs','blogs.id','notifications.blog_id')

        ->where([
        ['blogs.user_id', '=', Auth::id()],
        ['notifications.comment_person_id', '!=',  Auth::id()],])
        ->whereNull('notifications.notification_counter_status')
        ->get();

        $noti_counter=count($notifications_counter);


         $Category=Category::all();

        $Subcatagory= DB::table('categories')->join('subcatagories','subcatagories.catagory_name','categories.id')
        ->get();


        return view('user.newsfeed', compact('Own_Blogs','cc','Trending_Blogs','comment_count','users','noti_counter','likes_count','dislikes_count','Category','Subcatagory'));
       

    }
}
