<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    function viewDelete(){
        return view('Delete');
    }
    function destroy($id){

        $queryDel = DB::table('record_researches') ->where('id', $id) -> delete();

        if($queryDel){
            
            return back()->with('Deleted','RECORD DELETED SUCCESSFULLY');
            redirect('/');
        }else{
            return back()->with('fail','SOMETHING WENT WRONG');
        }
    }
    function find(){
        $query_search = $_GET['query_find'];
        $found = DB::where('Title','Research_Name','Partner_Agency','Designation', '%'.$query_search.'%') ->with('')->get();
        return view('found.find',compact('found'));
    }
}
