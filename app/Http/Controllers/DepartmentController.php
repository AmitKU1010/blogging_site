<?php
namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class DepartmentController extends Controller 
{
    /**
       * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Department = Department::all();
        return view('admin.department.index')->with('Department',$Department);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */ 
    // public function create(Request $request)
    // {
      
    //    $PinList=Pin::all();

    //     return view('admin.Departmentes.create')->with('PinList',$PinList);
       
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
                'department_name' => 'required',
            ],[
                'department_name.required' => ' The Department Name field is required.',
            ]);

      
        $Department=new Department();
        $Department->department_name=$request->input('department_name');
        $Department->save();

        return back()->with('success','Department created successfully!');
       
        

 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $Department)
    {
        //
    }

    
    public function edit($id)
    {
    $Department=Department::find($id);
    return view('admin.department.edit_department')->with('Department',$Department);
    }

    /** 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
          $this->validate($request,[
                'department_name' => 'required',
            ],[
                'department_name.required' => ' The Department field is required.',
            ]);


         $Department=Department::find($id);

        $Department->department_name=$request->input('department_name');

        $Department->save();

        return redirect('admin/departments')->with('success','Department Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $Department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Department=Department::find($id);
       $Department->delete();
       return redirect('admin/departments')->with('success','Department Deleted Succesfully');
    }
}
 