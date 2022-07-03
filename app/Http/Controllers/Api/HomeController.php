<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
	
	
	
	 public function login(Request $request) {

        $validator = Validator::make($request->all(), [ 
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $token = auth()->user()->createApiToken(); #Generate token
            return response()->json(['status' => 'Authorised', 'token' => $token ], 200);
        } else { 
            return response()->json(['status'=>'Unauthorised'], 401);
        } 
    }

    public function index() {
        $users = User::latest()->paginate(10);

        if($users->count()) { 
            return response()->json(['status' => 'true' ,'data' => $users], 200);
        } else{ 
            return response()->json(['status' => 'false'], 401);
        }
    }
	
}
