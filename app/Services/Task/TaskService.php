<?php

namespace App\Services\Task;

use App\Models\Task;

class TaskService
{

    public function index ()
    {
        return Task::where('user_id', auth()->user()->id)->paginate(50);
    }

    public function store ($task)
    {
        $task = $task + ['user_id' => auth()->user()->id];
        Task::create($task);
    }

    public function update ($task, $editTask)
    {
        $task->update($editTask);
    }

    public function destroy ($task)
    {
        $task->delete();
    }

}