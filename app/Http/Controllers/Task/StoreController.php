<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    
    public function __invoke (StoreRequest $request, Task $task)
    {
        $task = $request->validated();

        Task::create($task);
        
        return redirect()->route('tasks.index');
    }

}
