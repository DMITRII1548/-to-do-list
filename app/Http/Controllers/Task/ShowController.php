<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class ShowController extends BaseTaskController
{
    public function __invoke (Task $task)
    {
        return view('task.show', compact('task'));
    }
}
