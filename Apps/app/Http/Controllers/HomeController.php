<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Session;
use Redirect;
use DB;
use Illuminate\Support\Facades\Validator;
Use Illuminate\Database\QueryException;


class HomeController extends Controller
{

    public function __construct(){
        $isLogin = Session::get('is_login');
        /* if($isLogin == NULL){
            \Redirect::to('login')->send();
        } */
    }

    public function index(){
        $emp = DB::table('employee')->get();
        dd($emp);
    }
}
