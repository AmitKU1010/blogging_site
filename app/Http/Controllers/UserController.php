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

        $Own_Blogs = Blogs::get();
          
        return view('user.newsfeed', compact('Own_Blogs'));

 
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


      public function update_blog(Request $request)
    {   

        $Blogs=new Blogs();
        $Blogs->user_id=Auth::id();
        $Blogs->catagory_name=$request->input('catagory_name');
        $Blogs->subcatagory_name=$request->input('subcatagory_name');
        $Blogs->post_caption=$request->input('post_caption');
        $Blogs->post_description=$request->input('post_description');

        // dd($Blogs->post_description);
        $real=$request->input('post_image');
        $post_image = $request->file('post_image');
        $filename = time().'.'.$post_image->getClientOriginalExtension();
        $destinationPath = public_path('/images/post_img');
        $post_image->move($destinationPath, $filename);
        $Blogs->post_image=$filename;
        $Blogs->save();
       return Redirect::back()->with('message','Profile Updated Successfully !');
  
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

        return view('user.newsfeed');

    }
}
