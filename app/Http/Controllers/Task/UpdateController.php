<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\UpdateRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    
    public function __invoke (UpdateRequest $request, Task $task)
    {
        $editTask = $request->validated();

        $task->update($editTask);

        return redirect()->route('tasks.show', $task);
    }

}
