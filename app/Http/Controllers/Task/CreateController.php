<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends BaseTaskController
{

    public function __invoke ()
    {
        return view('create');
    }
    
}
