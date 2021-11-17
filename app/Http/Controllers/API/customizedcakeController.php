<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customizedcake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class customizedcakeController extends Controller {
    public $successStatus = 200;

    public function getAllcustomizedcake(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $customizedcake = customizedcake::all();

            return response()->json($customizedcake, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }        
    }  
    
    public function getCustomizedcake(Request $request) {
        $id = $request['pid']; // pid = customizedcake id
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $customizedcake = customizedcake::where('id', $id)->first();

            if ($customizedcake != null) {
                return response()->json($customizedcake, $this->successStatus);
            } else {
                return response()->json(['response' => 'Customizedcake not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }

    public function searchCustomizedcake(Request $request) {
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $customizedcake = customizedcake::where('design', 'LIKE', '%' . $params . '%')
                ->orWhere('flavor', 'LIKE', '%' . $params . '%')
                ->get();
            // SELECT * FROM customizedcake WHERE description LIKE '%params%' OR title LIKE '%params%'
            if ($customizedcake != null) {
                return response()->json($customizedcake, $this->successStatus);
            } else {
                return response()->json(['response' => 'Customizedcake not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }
}