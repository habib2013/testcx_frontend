<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserSubscriptionController extends BaseController
{

public function saveToDB(Request $request){
   $input = $request->all();
    dd($input);
}


}
