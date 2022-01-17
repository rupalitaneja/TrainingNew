<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectThis(){
        $role = Auth::user()->role;
        if($role == 3)
        {
            return view('admin.home');

        }
        else if($role == 2)
        {
            return view('teacher.home');
        }
        else{
            return view('student.home');
        }
    }
 
}