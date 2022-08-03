<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Services\Search\SearchService;
use Illuminate\Http\Request;

class BaseSearchController extends Controller
{

    public $service;
    
    public function __construct(SearchService $service )
    {
        $this->service = $service;
    }

}
