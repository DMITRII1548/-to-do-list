<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //this controller find task for title
    public function __invoke (SearchRequest $request)
    {
        $title = $request->validated();
        $title = $title['search'];
        $tasks = Task::where("title", 'LIKE', "%{$title}%")->get();
        return view('index', compact('tasks'));
    }
    
}
