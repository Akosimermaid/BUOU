<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    function viewAdd(){
        return view('Add');
    }

    function create(Request $request){
          $request->validate([
            'Date' => 'required',
            'Title' => 'required',
            'Research_Name' => 'required',
            'Partner_Agency' => 'required',
            'Designation' => 'required',
            'Start_Date' => 'required',
            'Target_Date' => 'required',
            'CREC' => 'required',
            'URECOM' => 'required',
            'Fund' => 'required',
            'Budget' => 'required',
            'Remarks' => 'nullable',
        ]);
        

        $query = DB::table('record_researches')->insert([
            'Date' =>$request->input('Date'),
            'Title' =>$request->input('Title'),
            'Research_Name' =>$request->input('Research_Name'),
            'Partner_Agency' =>$request->input('Partner_Agency'),
            'Designation' =>$request->input('Designation'),
            'Start_Date' =>$request->input('Start_Date'),
            'Target_Date' =>$request->input('Target_Date'),
            'CREC' =>$request->input('CREC'),
            'URECOM' =>$request->input('URECOM'),
            'Fund' =>$request->input('Fund'),
            'Budget' =>$request->input('Budget'),
            'Remarks' =>$request->input('Remarks'),
        ]);

        if($query){
            
            return back()->with('success','DATA HAS BEEN SUCESSFULLY ADDED');
            redirect('dashboard');
        }else{
            return back()->with('fail','SOMETHING WENT WRONG');
        }
    }


    function edit($id){
        echo $id;
    }
}
