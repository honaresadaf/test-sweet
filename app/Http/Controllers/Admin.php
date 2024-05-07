<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index(){
// example:
alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->persistent(true,false);

Alert::error(session('error'));
        return view('index');
    }
}
