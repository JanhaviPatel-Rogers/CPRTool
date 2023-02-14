<?php

namespace App\Http\Controllers;

use App\Models\Project;

use Illuminate\Http\Request;

class CAController extends Controller
{
    public function index(){
        $CA = Project::all();

        return view('CA.index', ['CA'=>$CA]);
    }

    public function update($id, Request $request)
    {
        $CA = Project::find($id);

        $CA->BudgetStartYear=$request->input('BudgetStartYear');
        $CA->update();
        return redirect()->route('CA.index');

    }

    public function edit($id)
    {
        $CA = Project::find($id);
        return view('CA.edit', compact("CA"));

    }

    public function delete($id)
    {
        $CA = Project::find($id);
        return view('CA.delete', compact("CA"));
    }

    public function details($id)
    {
        $CA = Project::find($id);
        return view('CA.details', compact("CA"));
    }

    public function remove($id)
    {
        $CA = Project::find($id);
        $CA->delete();
        return redirect()->route('CA.index');
    }
}
