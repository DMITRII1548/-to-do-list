<?php 

namespace App\Services\Search;

use App\Models\Task;

class SearchService
{

    public function search ($title)
    {
        $title = $title['search'];
        return $tasks = Task::where("title", 'LIKE', "%{$title}%")->paginate(50);
    }

}