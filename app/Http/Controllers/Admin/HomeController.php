<?php
namespace App\Http\Controllers\Admin;
use App\Form;
use App\Http\Controllers\Controller;
use App\Report;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.home');
    }

    public function userList()
    {
        $user=User::all();
        return view('admin.userList',compact('user'));

    }
    public function scamReport()
    {
        $form=Form::latest('id')->get();

        return view('admin.complainList',compact('form'));

    }

    public function userReview()
    {
        $report=Report::all();
        return view('admin.reportList',compact('report'));

    }
}
