<?php

namespace App\Http\Controllers;

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
