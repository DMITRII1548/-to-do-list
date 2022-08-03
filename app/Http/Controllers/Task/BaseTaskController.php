<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Services\Task\TaskService;
use Illuminate\Http\Request;

class BaseTaskController extends Controller
{
    
    public $service;

    public function __construct (TaskService $service)
    {
        $this->service = $service;
    }

}
