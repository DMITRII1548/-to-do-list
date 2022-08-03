<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends BaseTaskController
{
    public function __invoke ()
    {
        $tasks = $this->service->index();
        return view('index', compact('tasks'));
    }
}
