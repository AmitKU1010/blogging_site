<?php
namespace App\Http\Controllers;
use App\Subcatagory;
use App\Category;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class SubcatagoryController extends Controller 
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Subcatagory = DB::table('subcatagories')
                       ->join('categories','categories.id','subcatagories.catagory_name')
                       ->select('categories.*','subcatagories.*','categories.catagory_name as cat_name')
                       ->get();
        $catagory = Category::all();

        return view('admin.subcatagory.subcatagory')->with('Subcatagory',$Subcatagory)
        ->with('catagory',$catagory);
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
      $this->validate($request,[
                'subcatagory_name' => 'required',
            ],[
                'subcatagory_name.required' => ' The Subcatagory Name field is required.',
            ]);

      
        $Subcatagory=new Subcatagory();
        $Subcatagory->catagory_name=$request->input('catagory_name');
        $Subcatagory->subcatagory_name=$request->input('subcatagory_name');
        
        $Subcatagory->save();

        return back()->with('success','Subcatagory created successfully!');
       
        

 
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
 
     
    public function edit($id)
    {
       $Subcatagory=Subcatagory::find($id);
       // $Subcatagory_all=DB::table('subcatagories')->join('categories','categories.id','subcatagories.catagory_name')
       // ->select('subcatagories.*','categories.id as cat_id','categories.catagory_name as cat_name')
       // ->get();

        $catagory = Category::all();

       return view('admin.subcatagory.edit_subcatagory')->with('Subcatagory',$Subcatagory)->with('catagory',$catagory);
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
                'subcatagory_name' => 'required',
            ],[
                'subcatagory_name.required' => ' The Subcatagory field is required.',
            ]);

     

         $Subcatagory=Subcatagory::find($id);

        $Subcatagory->catagory_name=$request->input('catagory_name');

        $Subcatagory->subcatagory_name=$request->input('subcatagory_name');

        $Subcatagory->save();

        return redirect('admin/subcategories')->with('success','Subcatagory Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Subcatagory=Subcatagory::find($id);
       $Subcatagory->delete();
       return redirect('admin/subcategories')->with('success','Subcatagory Deleted Succesfully');
    }
}
 