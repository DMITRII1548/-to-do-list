<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class StoreController extends BaseTaskController
{
    
    public function __invoke (StoreRequest $request, Task $task)
    {
        $task = $request->validated();

        $this->service->store($task);
        
        return redirect()->route('tasks.index');
    }

}
