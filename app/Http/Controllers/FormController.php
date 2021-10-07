<?php

namespace App\Http\Controllers;

use App\Form;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'VictimName' => 'required',
            'VictimNumber' => 'required',
            'FraudName' => 'required',
            'FraudNumber' => 'required',
//            'Screenshot' => 'required|file|max:1024',
            'date' => 'required',
            'time' => 'required',
            'summary' => 'required',
        ]);

        $form = new Form();
        $form->VictimName = $request->input('VictimName');
        $form->VictimNumber = $request->input('VictimNumber');
        $form->FraudName = $request->input('FraudName');
        $form->FraudNumber = $request->input('FraudNumber');
        $form->identify = $request->input('identify');
        $form->date = $request->input('date');
        $form->time = $request->input('time');
        $form->summary = $request->input('summary');
        $form->creator = Auth::user()->name;

        if ($request->hasFile('Screenshot')) {
            $file = $request->file('Screenshot');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('categorypic/', $filename);
            $form->Screenshot = $filename;
        }
        $form->save();
        Toastr::success('Form Submitted Successfully', 'success');
        return redirect('/formList');
    }

    public function show()
    {
        $form = Form::where([
            ['creator', '=', Auth::user()->name]
        ])->latest('id')->get();;

        return view('User.formList', compact('form'));

    }
}
