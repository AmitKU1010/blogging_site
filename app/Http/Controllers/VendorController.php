<?php
namespace App\Http\Controllers;
use App\Manager;
use App\Vendor;
use App\User;
use App\Department;
use App\Pin;

use App\Branch;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();

        $User =  DB::table('users')->where('role_id', '=', 3)->get();
        return view('admin.vendors.index')->with('User',$User);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = Vendor::all();
        $Department = Department::all();
        $Branch = Branch::all();
        $Pin = Pin::all();



        return view('admin.vendors.create')->with('Department',$Department)->with('Branch',$Branch)->with('Pin',$Pin);
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


// //images starts
//       $real1 = $request->file('profile_image');

//       $filename1 = time().'.'.$real1->getClientOriginalExtension();
//       // Image::make($image)->resize(300, 300)->save( storage_path('/images' . $filename ) );
//        $destinationPath1 = public_path('/images');
//        $real->move($destinationPath1, $filename1);
//       $User->profile_image=$filename1;
// //images ends



        $User->qualification=$request->input('qualification');
        $User->profile_image=$request->input('profile_image');
        $User->id_proof=$request->input('id_proof');
        

        //images starts

      // $real2 = $request->file('id_proof');
      // $filename2 = time().'.'.$real2->getClientOriginalExtension();

      // // Image::make($image)->resize(300, 300)->save( storage_path('/images' . $filename ) );
      //  $destinationPath2 = public_path('/images');
      //  $real->move($destinationPath2, $filename2);
      // $User->id_proof=$filename2;

//images ends


        $User->department_name_user=$request->input('department_name_user');
        $User->branch=$request->input('branch');

 
        // $User->department_name_user=$request->input('department_name_user');

        $boi = implode(',', $request->input('department_name_user'));

        $User->department_name_user=$boi;

        $aoi = implode(',', $request->input('branch'));

        $User->branch=$aoi;


        // $User->id_proof=$request->input('id_proof');

        // $User->working_days=$request->input('working_days');

        $coi = implode(',', $request->input('working_days'));

        $User->branch=$coi;


        $User->working_time_in=$request->input('working_time_in');
        $User->working_time_out=$request->input('working_time_out');
        $User->account_number=$request->input('account_number');
        $User->ifsc_code=$request->input('ifsc_code');
        $User->email=$request->input('email');
        $User->phone_number=$request->input('phone_number');
        $User->address=$request->input('address');
        $User->show_password=$request->input('password');

        $User->strength=$request->input('strength');





        $User->bank_name=$request->input('bank_name');
        $User->bank_branch=$request->input('bank_branch');
        $User->toolkit_status=$request->input('toolkit_status');
        $User->tool_percentage=$request->input('tool_percentage');
        $User->safety_material=$request->input('safety_material');
        $User->safety_percentage=$request->input('safety_percentage');
        $User->insurance_status=$request->input('insurance_status');
        $User->workshop_status=$request->input('workshop_status');
        $User->allow_workshop=$request->input('allow_workshop');
        $User->workshop_address=$request->input('workshop_address');
        $User->workshop_insurance_status=$request->input('workshop_insurance_status');
        $User->maintain_stock=$request->input('maintain_stock');

        $User->stock_percentage=$request->input('stock_percentage');
        $User->ride_on=$request->input('ride_on');

        $User->reference_address=$request->input('reference_address');

 
        $User->vehicle_number=$request->input('vehicle_number');
        $User->team_member_name=$request->input('team_member_name');
        $User->team_member_gender=$request->input('team_member_gender');
        $User->team_member_address=$request->input('team_member_address');
        $User->team_member_con_number=$request->input('team_member_con_number');
        $User->team_member_photo=$request->input('team_member_photo');


// // image
//          $real3 = $request->file('team_member_photo');
//       $filename3 = time().'.'.$real3->getClientOriginalExtension();
//        $destinationPath3 = public_path('/images');
//        $real->move($destinationPath3, $filename3);
//        $User->team_member_photo=$filename3;
// // image

        $User->doj=$request->input('doj');

        $User->priority=$request->input('priority');

        $User->role_id=$request->input('role_id');
        $pass=Hash::make($request->input('password'));

        $User->password=$pass;
        $User->save();
  
        return back()->with('success','Manager created successfully!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Product=DB::table('users')->where('id',$id);
       $Product->delete();
       return redirect('admin/vendors')->with('success','Vendor Deleted Succesfully');
    }
}
