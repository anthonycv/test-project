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
     * (route model binding)
     *
     * Inject a models instance into controller action
     * Task::find(wildcard) = public function show(Task $task)
     *
     * @param $id -> id of table Tasks
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show(Task $task)
    {
        return view('tasks.task', compact('task'));
    }
}
