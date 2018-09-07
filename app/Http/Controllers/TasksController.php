<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TasksController extends Controller
{
    public function tasks()
    {
        $tasks = DB::table('tasks')->get();
        return view('Tasks.tasksList',compact('tasks'));
    }

    public function taskById($id=null)
    {
        $tasks = DB::table('tasks')->where('id',$id)->get();
        return view ('Tasks.taskDetails',compact('tasks'));
    }
}
