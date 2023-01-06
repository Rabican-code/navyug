<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class admissionController extends Controller
{
    //
    function addmission (Request $req)
    {
        $admission = new Admission;
        $admission->f_name = $req->f_name;
        $admission->l_name = $req->l_name;
        $admission->father_name = $req->father;
        $admission->mother_name = $req->mother;
        $admission->mobile_no = $req->mobile;
        $admission->email = $req->email;
        $admission->birth = $req->dob;
        $admission->addreas = $req->address;
        $admission->save();
        return redirect()->back()->with('success', 'Admission Successfull');

    }
}
