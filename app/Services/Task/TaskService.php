<?php

namespace App\Services\Task;

use App\Models\Task;

class TaskService
{

    public function index ()
    {
        return Task::paginate(50);
    }

    public function store ($task)
    {
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