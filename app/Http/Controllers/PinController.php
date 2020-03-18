<?php

namespace App\Http\Controllers;

use App\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pins = Pin::all();
        return view('admin.pins.index')->with('pins',$pins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    $this->validate($request,[
                'pin_codes' => 'required|min:6|max:6',
            ],[
                'pin_codes.required' => ' The Pincode field is required.',
            ]);

        $pin=new Pin();
        $pin->pin_codes=$request->input('pin_codes');
        $pin->save();

        return back()->with('success','Pin created successfully!');

        // dd($pin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request,$id)
    // {
    //        $this->validate($request,[
    //             'pin_codes' => 'required|min:6|max:6',
    //         ],[
    //             'pin_codes.required' => ' The Pincode field is required.',
    //         ]);

    //     $Pin=Pin::find($id);
    //     $Pin->pin_codes = $request->input('pin_codes');

    //     $Pin->save();

       
    //     return back()->with('success','Pin Updated successfully!');
      

    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pin  $pin
     * @return \Illuminate\Http\Response
     */
    public function show(Pin $pin)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pin  $pin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Pins=Pin::find($id);
       return view('admin.pins.edit_pin')->with('Pins',$Pins);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pin  $pin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
                'pin_codes' => 'required|min:6|max:6',
            ],[
                'pin_codes.required' => ' The Pincode field is required.',
            ]);
         $Pin=Pin::find($id);

        $Pin->pin_codes=$request->input('pin_codes');
        $Pin->save();

        return redirect('admin/pins')->with('success','Pincode Updated Succesfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pin  $pin
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
       $Pin=Pin::find($id);
       $Pin->delete();
        return redirect('admin/pins')->with('success','Pincode Deleted Succesfully');
      
    }
}
 