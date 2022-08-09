<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Search\BaseSearchController;
use App\Http\Requests\SearchRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class SearchController extends BaseSearchController
{
    //this controller find task for title
    public function __invoke (SearchRequest $request)
    {
        $title = $request->validated();
        $tasks = $this->service->search($title);
        return view('task.index', compact('tasks'));
    }
    
}
