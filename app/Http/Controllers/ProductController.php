<?php

namespace App\Http\Controllers;

use App\Category;
use App\Department;
use App\Subcatagory;
use App\Branch;
use App\ServiceType;
use App\Catagorylist;
use DB;
use App\Http\Requests\StoreProduct;
use App\Product;
use App\CategoryParent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Cart;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   $allList=DB::table('products')
            ->join('departments', 'products.department_name', '=', 'departments.id')
            ->join('categories', 'categories.id', '=', 'products.catagory_name')
            ->join('subcatagories', 'subcatagories.id', '=', 'products.subcatagory_name')
            ->join('service_types', 'service_types.id', '=', 'products.service_type')
            ->get();


        return view('admin.services.index')->with('allList',$allList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $Category = Category::all();
        $Department = Department::all();
        $Subcatagory = Subcatagory::all();
        $Branch = DB::table('branches')
                ->select('name')
                ->groupBy('name')
                ->get();
        $ServiceType = ServiceType::all();


        return view('admin.services.create')->with('Category',$Category)->with('Department',$Department)->with('Subcatagory',$Subcatagory)->with('Branch',$Branch)->with('ServiceType',$ServiceType);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // $this->validate($request,[
            //     'subcatagory_name' => 'required',
            // ],[
            //     'subcatagory_name.required' => ' The Subcatagory Name field is required.',
            // ]);


        $Product=new Product();
        $Product->service_name=$request->input('service_name');
        $Product->description=$request->input('description');
        $Product->department_name=$request->input('department_name');
        $Product->catagory_name=$request->input('catagory_name');
        $Product->subcatagory_name=$request->input('subcatagory_name');
        $Product->service_type=$request->input('service_type');
        $Product->price=$request->input('price');
        $Product->offer_price=$request->input('offer_price');
        $Product->tax=$request->input('tax');

        $aoi = implode(',', $request->input('availbale'));

        $Product->availbale=$aoi;


        $Product->product_synonyms=$request->input('product_synonyms');
        // $Product->images=$request->input('images');
//images starts

      $real = $request->file('images');
      // dd($real);


      // $image=$real[$i];


      $filename = time().'.'.$real->getClientOriginalExtension();


      // Image::make($image)->resize(300, 300)->save( storage_path('/images' . $filename ) );

       $destinationPath = public_path('/images');

       $real->move($destinationPath, $filename);

       $Product->images=$filename;

//images ends



        $Product->video_link=$request->input('video_link');
        $Product->booking_time=$request->input('booking_time');


        $Product->slug=$request->input('slug');
        $Product->faq=$request->input('faq');
        $Product->related_service=$request->input('related_service');

         // var_dump($request->input('description'));
         // dd($request->input('faq'));

        $Product->save();

        return back()->with('success','Product created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function single_service($id)
    {
        $single_service=DB::table('products')->where('id',$id)->get();
        $single_service_data =Product::where('id',$id)->first();
        $Product=DB::table('products')->get();


        // dd($single_service);
        return view('admin.services.single_service',compact('single_service_data'))->with('single_service',$single_service)
        ->with('Product',$Product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $Product=DB::table('products')->where('service_name',$id);
       $Product->delete();
       return redirect('admin/services')->with('success','Services Deleted Succesfully');


    }
}
