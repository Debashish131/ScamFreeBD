<?php

namespace App\Http\Controllers;

use App\Form;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $form = Form::where([
            ['creator', '=', Auth::user()->name]
        ])->get();
        return view('User.dashboard',compact('form'));
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect("/");
    }

    public function profile()
    {
//        $profile = User::find($id);
        $profile = User::where([
            ['id', '=', Auth::user()->id]])->get();
//        dd($profile);
        return view('User.profile', compact('profile'));

    }

    public function formPage()
    {

        return view('User.form');

    }

    public function support()
    {

        return view('User.report');

    }
}
