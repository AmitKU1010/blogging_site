<?php
namespace App\Http\Controllers;
use App\Product;
use App\Department;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class WelcomeController extends Controller 
{  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {

        return view('auth.login');
    }

     public function search(Request $request)
       {
      
        $search=$request->input('search');



        $Product=DB::table('products')->where('service_name','LIKE','%'.$search.'%')->get();





        return view('admin.search_result')->with('Product',$Product);
         
 
      }


        

}
 