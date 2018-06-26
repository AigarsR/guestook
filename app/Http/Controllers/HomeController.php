<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Request;
use App\guestbook;


class HomeController extends Controller
{
    public function index()
    {
        $guestbook = DB::table('guestbooks')->select('username','email','website','message','created_at')->paginate(10);


         return view("index", compact('guestbook'));

    }
    public function store(Request $Request)
    {
        guestbook::create(Request::all());
        $guestbook = DB::table('guestbooks')->select('username','email','website','message','created_at')->paginate(10);

        return view("index", compact('guestbook'));

    }


}