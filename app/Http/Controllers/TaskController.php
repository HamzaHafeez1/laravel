<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use DB;
class TaskController extends Controller
{
    public function addPost(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->content = $request->content;
        $task->save();
        $tasks = Task::all();
        return view('tasks.show_tasks',compact('tasks'));
    }

    public function showPost()
    {
        $tasks = Task::latest()->get();
        return view('tasks.show_tasks',compact('tasks'));
    }

    public function deletePost($id = null)
    {
        $tasks = DB::table('tasks')->where('id',$id)->delete();
        $tasks = Task::latest()->get();
        return view('tasks.show_tasks',compact('tasks'));
    }
}
