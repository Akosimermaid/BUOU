<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    function viewEdit(){
        return view('Edit');
    }
    function change(record_research $request){
        echo $id;
    }
}
