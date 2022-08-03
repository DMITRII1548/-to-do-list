<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class DestroyController extends BaseTaskController
{
     
    public function __invoke (Task $task)
    {
        $this->service->destroy($task);

        return redirect()->route('tasks.index');
    }
     
}
