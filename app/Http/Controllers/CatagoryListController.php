<?php
namespace App\Http\Controllers;
use App\Category;
use App\Department;
use App\Subcatagory;
use App\ServiceType;
use App\Catagorylist;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CatagoryListController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $Category = Category::all();
        $Department = Department::all();
        $Subcatagory = Subcatagory::all();
        $Catagorylist = Catagorylist::all();



           $allList=DB::table('catagory_lists')
            ->join('departments', 'catagory_lists.department_name', '=', 'departments.id')
            ->join('categories', 'categories.id', '=', 'catagory_lists.catagory_name')
            ->join('subcatagories', 'subcatagories.id', '=', 'catagory_lists.subcatagory_name')
           
            ->get(array('subcatagories.subcatagory_name as subcatagory_name','departments.department_name as department_name','categories.catagory_name as catagory_name','catagory_lists.id as catagory_list_id'));

        return view('admin.catagorylist.catagorylist')->with('Category',$Category)->with('Department',$Department)->with('Subcatagory',$Subcatagory)->with('allList',$allList)->with('Catagorylist',$Catagorylist);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */ 
    // public function create(Request $request)
    // {
      
    //    $PinList=Pin::all();

    //     return view('admin.branches.create')->with('PinList',$PinList);
       
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
      // $this->validate($request,[
      //           'department_name' => 'required',
      //       ],[
      //           'department_name.required' => ' The Department Name field is required.',
      //       ]);

      
        $Catagorylist=new Catagorylist();
        $Catagorylist->department_name=$request->input('department_name');
        $Catagorylist->catagory_name=$request->input('catagory_name');
        $Catagorylist->subcatagory_name=$request->input('subcatagory_name');

        $Catagorylist->save();


        return back()->with('success','Department created successfully!');
       
        

 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        //
    }
 
 
     
    public function edit($catagory_list_id)
    {
       $Catagorylist=Catagorylist::find($catagory_list_id);
       $Category = Category::all();
       $Department = Department::all();
       $Subcatagory = Subcatagory::all();
       return view('admin.catagorylist.edit_catagorylist')->with('Catagorylist',$Catagorylist)->with('Category',$Category)->with('Department',$Department)->with('Subcatagory',$Subcatagory);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $this->validate($request,[
                'name' => 'required',
            ],[
                'name.required' => ' The Branch field is required.',
            ]);

       $this->validate($request,[
                'address' => 'required',
            ],[
                'address.required' => ' The Address field is required.',
            ]);

         $Branch=Branch::find($id);

        $Branch->name=$request->input('name');
        $Branch->address=$request->input('address');

        // $aoi = implode(',', $request->input('pin'));

        // $Branch->pin=$aoi;
        $Branch->save();

        return redirect('admin/branches')->with('success','Branch Updated Succesfully');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Catagorylist=Catagorylist::find($id);
       $Catagorylist->delete();
        return back()->with('success','Mater Setup deleted successfully!');
       
    }
}
  