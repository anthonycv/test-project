<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

/**
 * Class TasksController
 * @package App\Http\Controllers
 */
class TasksController extends Controller
{

    /**
     * Show all tasks
     *
     * (Query builder laravel)
     *
     * $tasks = DB::table('tasks')->latest()->get();
     *
     * (Call from model)
     * $tasks = Task::all();
     * $tasks = Task::where('completed', 1)->get();
     * $tasks = Task::incomplete()->where('id', '>=', '1')->get();
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.tasks', compact('tasks'));
    }

    /**
     * Show one task
     *
     * (Query builder laravel)
     *
     * $task = DB::table('tasks')->find($id);
     *
     * (Call from model)
     *
     * $task = Task::find($id);
     *
     * @param $id -> id of table Tasks
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.task', compact('task'));
    }
}
