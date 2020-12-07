<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends MasterApiController
{
    protected $model;

    function __construct(Classification $classificacao, Request $request)
    {
        $this->model = $classificacao;
        $this->request = $request;
    }
    
    
}
