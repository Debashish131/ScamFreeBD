<?php

namespace App\Http\Controllers;

use App\Form;
use App\Report;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function reportSave(Request $request)
    {
        $request->validate([
            'problem_type' => 'required',
            'subject' => 'required',
            'describe' => 'required',
        ]);
        $report = new Report();
        $report->problem_type = $request->input('problem_type');
        $report->subject = $request->input('subject');
        $report->describe = $request->input('describe');
        $report->creator = Auth::user()->name;
        $report->save();
        Toastr::success('Report Added Successfully', 'success');
        return back();


    }

    public function reportShow()
    {
        $report = Report::where([
            ['creator', '=', Auth::user()->name]
        ])->latest('id')->get();

        return view('User.reportList', compact('report'));

    }


}
