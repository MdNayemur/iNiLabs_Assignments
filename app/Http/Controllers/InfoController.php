<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
class InfoController extends Controller
{
    /**
     * to display all student information
     */
    public function index()
    {
        $inf=Information::all();
        return view('manage', compact('inf'));
    }

    /**
     * to display add student page
     */
    public function addstudent()
    {
        return view('addstudent');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Function for adding new student information
     */
    public function store(Request $rqst)
    {
        
        $info = new Information();
        $rqst->validate([
            'stdid'=>'required',
            'name'=>'required|max:200',
            'email'=>'required|max:200',
            'phone'=>'required'
        ]); 
        $info->studentID= $rqst->stdid;
        $info->sname= $rqst->name;
        $info->email= $rqst->email;
        $info->Phone= $rqst->phone;;
        $info->save();
        return redirect()->route('manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * For showing Edit information page
     */
    public function edit(string $id)
    {
        $edtinf=Information::find($id);
        return view('editstudent', compact('edtinf'));
    }

    /**
     * For updating the student information
     */
    public function update(Request $request, string $id)
    {
        $updateinf=Information::find($id);
        $updateinf->studentID= $request->stdid;
        $updateinf->sname= $request->name;
        $updateinf->email= $request->email;
        $updateinf->Phone= $request->phone;;
        $updateinf->update();
        return redirect()->route('manage');
    }

    /**
     * For deleting informtion from the table
     */
    public function destroy(string $id)
    {
        $delete=Information::find($id);
        $delete->delete();
        return redirect()->route('manage');
    }
}
