<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manager;
use App\Order;
use App\Product;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Branch;
use DB;
class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User =  DB::table('users')->where('role_id', '=', 4)->get();
        $Branch = Branch::all();

        return view('admin.managers.index')->with('Branch',$Branch)->with('User',$User);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $managers = Manager::all();
         $Branch = Branch::all();

        return view('admin.managers.create')->with('Branch',$Branch);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
                'name' => 'required',
            ],[
                'name.required' => ' The Manager Name field is required.',
            ]);
        $User=new User();
        $User->name=$request->input('name');
        $User->gender=$request->input('gender');
        $User->dob=$request->input('dob');
        // $User->profile_image=$request->input('profile_image');


//images starts

      $real = $request->file('profile_image');
      // dd($real);


      // $image=$real[$i];


      $filename = time().'.'.$real->getClientOriginalExtension();


      // Image::make($image)->resize(300, 300)->save( storage_path('/images' . $filename ) );

       $destinationPath = public_path('/images');

       $real->move($destinationPath, $filename);

      $User->profile_image=$filename;

//images ends














        $User->qualification=$request->input('qualification');
        $User->department_name_user=$request->input('department_name_user');
        $User->branch=$request->input('branch');



            $aoi = implode(',', $request->input('branch'));

        $User->branch=$aoi;


        $User->id_proof=$request->input('id_proof');
        $User->working_days=$request->input('working_days');
        $User->working_time_in=$request->input('working_time_in');
        $User->working_time_out=$request->input('working_time_out');
        $User->account_number=$request->input('account_number');
        $User->ifsc_code=$request->input('ifsc_code');
        $User->email=$request->input('email');
        $User->phone_number=$request->input('phone_number');
        $User->address=$request->input('address');
        $User->show_password=$request->input('password');
        $User->role_id=$request->input('role_id');
        $pass=Hash::make($request->input('password'));

        $User->password=$pass;
        $User->save();

        return back()->with('success','Manager created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        //
    }
    public function manager_order(){
        $orders = \Illuminate\Support\Facades\DB::table('orders')
            ->get();
        foreach ($orders as $order){
           $product = Product::where('id',$order->product_id)->first();
             $order->category = $product->categories;
             $order->department = $product->department;
            $order->product_name = $product->service_name;
        }

       //return $cat->products;
        //return $orders;
        return view('manager.order')->with('Users',$orders);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Manager $manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Product=DB::table('users')->where('id',$id);
       $Product->delete();
       return redirect('admin/managers')->with('success','Manager Deleted Succesfully');
    }
    public function manager_vendor_order($id){
        //return $id;
        $order = Order::where('id',12)->first();
        $product = Product::where('id',$order->product_id)->first();
        //return $product->department;
            //return User::where('');
        $vendors = Vendor::all();

        $User =  DB::table('users')->where('role_id', '=', 3)->get();
        return view('manager.vendors.index')->with('User',$User);
    }
    public function vendor_assign($id){

       $user = User::where('id',$id)->update(['status' => "assigned"]);
       return Redirect::back()->with('success','Vendor Assigned Succesfully');

    }

}
