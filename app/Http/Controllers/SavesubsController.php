<?php

namespace App\Http\Controllers;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Mail\Hello;

use Validator;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use Mail;
use View;

class SavesubsController extends Controller
{
    public function saveToDB(Request $request){
        $input = $request->all();
        //  dd($input);
      $subadded =   Subscription::create($input);

        if($subadded){
            $email = $request->email;
            $customerID = DB::select( DB::raw("SELECT id FROM subscriptions WHERE email = :email"), array(
                'email' => $email,
              ));

            return response()->json(
                [
                    'status' => 'success',
                    'message' => 'subscription sent',
                    'usermail' => $request->email,
                    'userFullname' => $request->fullname,
                    'userId' => $customerID[0]->id,
                ]
            );
        }

     }



}
