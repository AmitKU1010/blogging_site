<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with('categories',$categories);
    }

    /**
     * Display Trashed listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $categories = Category::onlyTrashed()->all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create', compact('categories'));
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
                'catagory_name' => 'required',
                'catagory_img' => 'required',
            ],[
                'catagory_name.required' => ' The Catagory Name field is required.',
            ]);

       
        $Category=new Category();
        $Category->catagory_name=$request->input('catagory_name');

 

        $Category_image = $request->file('catagory_img');
        $filename = time().'.'.$Category_image->getClientOriginalExtension();
        $destinationPath = public_path('/images/catagory_img');
        $Category_image->move($destinationPath, $filename);
        $Category->catagory_img=$filename;


 



        $Category->save();

        return back()->with('success','Catagory created successfully!');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
      public function edit($id)
    {
    $Category=Category::find($id);
    return view('admin.categories.edit_catagory')->with('Category',$Category);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */ 
      public function update(Request $request,$id)
    {
          $this->validate($request,[
                'catagory_name' => 'required',
            ],[
                'catagory_name.required' => ' The Catagory field is required.',
            ]);


         $Category=Category::find($id);

        $Category->catagory_name=$request->input('catagory_name');

        $Category->save();

        return redirect('admin/categories/create')->with('success','Catagory Updated Succesfully');
    }

    public function recoverCat($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);
        if ($category->restore())
            return back()->with('message', 'Category Successfully Restored!');
        else
            return back()->with('message', 'Error Restoring Category');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Category=Category::find($id);
       $Category->delete();
       return redirect('admin/categories/create')->with('success','Category Deleted Succesfully');
    }
 
    public function fetchCategories($id = 0)
    {

        if ($id == 0)
            return Category::all();

        $category =  Category::where('id', $id)->first();
        return $category->childrens;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function remove(Category $category)
    {
        if ($category->delete()) {
            return back()->with('message', 'Category Successfully Trashed!');
        } else {
            return back()->with('message', 'Error Deleting Record');
        }
    }
}
