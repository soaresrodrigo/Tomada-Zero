<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends MasterApiController
{
    protected $model;

    function __construct(Employee $funcionario, Request $request)
    {
        $this->model = $funcionario;
        $this->request = $request;
    }
}
