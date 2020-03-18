<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\User;

class CustomerController extends Controller
{

    public function __construct()
    { }

    public function updatecustomer(Request $request,$id)
    {

       $User=User::find($id);
       $User->name=$request->input('name');
       $User->gender=$request->input('gender');
       $User->email=$request->input('email');
       $User->phone_number=$request->input('phone_number');
       $User->address=$request->input('address');
       $User->pincode=$request->input('pincode');


       $User->save();

       return view('home');

    }


    public function getotp(Request $request)
    {
        $rand =  rand(100000,999999);
            $email = $request->phone_number;
        if (strpos($request->phone_number, '@') !== false) {
            //return '12';
            $data = array('otp' => $rand);

            Mail::send(['text' => 'mail'], $data, function ($message) use ($email){
                $message->to($email, 'Moseva')->subject
                ('Otp Verification Mail');
                $message->from('service@moseva.com', 'Moseva');
            });
            $data['response'] = "True";
            $data['otp'] = $rand;
            return $data;
        }

        else{


            $phone = '91'.$request->phone_number;
            //return $request->all();
       $phone_number = User::where('phone_number',1234)->first();
       if(!$phone_number) {
           $url = "http://login.yourbulksms.com/api/sendhttp.php?authkey=13532ALyocp7dlqht5d8dd771&mobiles=$phone&message=Your Otp is $rand&sender=MOSEVA&route=4&country=91";


           $ch = curl_init();


           curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

           curl_setopt($ch, CURLOPT_URL, $url);

           $result = curl_exec($ch);

            $data['response'] = "True";
            $data['otp'] = $rand;
           return $data;

       }
       else{
           return $data['response'] = "false";
       }
        }
    }
    public function otpview()
    {


      //$var="http://loggin.yourbulksms.com/api/sendhttp.php?authkey=13532ALyocp7dlqht5d8dd771&mobiles=7008712917&message=Hi amit&sender=MOSEVA&route=4&country=91";
      return view('admin.otpview');
    }




     public function otpverify(Request $request,$id)
    {

       $User=User::find($id);
       $User->otp=$request->input('otp');
       $User->save();
       return view('home');

    }


}
