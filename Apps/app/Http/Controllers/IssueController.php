<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IssueController extends Controller
{

    public function __construct(){
        $isLogin = Session::get('is_login');
        /* if($isLogin == NULL){
            \Redirect::to('login')->send();
        } */
    }

    public function reportIssue(){
        /* $emp = DB::table('employee')->get();
        dd($emp); */
        return view('auth.login');
    }

}
