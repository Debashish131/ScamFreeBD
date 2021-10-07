<?php

namespace App\Http\Controllers\Admin;

use App\Form;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function edit($id)
    {
        $form = Form::find($id);
        return view('admin.Form.edit',compact('form'));

    }
    public function approve(Request $request, $id)
    {
        $form = Form::findOrFail($id);
        $form->Is_approve = '1';
        $form->save($request->all());
        return back();
    }

    public function scamDataupdate(Request $request,$id)
    {

        $form = Form::find($id);
        $form->VictimName = $request->input('VictimName');
        $form->VictimNumber = $request->input('VictimNumber');
        $form->FraudName = $request->input('FraudName');
        $form->FraudNumber = $request->input('FraudNumber');
        $form->save();
        Toastr::info('Form Updated Successfully','Success');
        return redirect('/scamReport');

    }
    public function ScamDelete($id)
    {
        $form = Form::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }
}
