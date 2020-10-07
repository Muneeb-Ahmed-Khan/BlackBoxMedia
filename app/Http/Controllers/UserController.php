<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Mail;
use App\Mail\InformationMail;

class UserController extends Controller
{
     //======================================================================
    // COnstrutor
    //======================================================================
    public function __construct()
    {
        $this->middleware(['auth:user','verified']);
    }

    public function Dashboard()
    {
        return view("user.dashboard");
    }
    
}
