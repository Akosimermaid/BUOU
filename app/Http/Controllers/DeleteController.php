<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    function viewDelete(){
        return view('Delete');
    }
    function destroy(){

        $queryDel = DB::table('record_researches') ->where('id', '13') -> delete();

        if($queryDel){
            
            return back()->with('Deleted','RECORD DELETED SUCCESSFULLY');
        }else{
            return back()->with('fail','SOMETHING WENT WRONG');
        }
    }
    function find(){
        $query_search = $_GET['Search'];
        $found = DB::table('record_researches') ->where('Title','LIKE', '%'.$query_search.'%') ->get();
        return view('Delete.find',compact('found'));
    }
}

