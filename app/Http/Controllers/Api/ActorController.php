<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\Models\Actor;
use App\Models\Employee;

class ActorController extends MasterApiController
{
    protected $model;

    function __construct(Actor $ator, Request $request)
    {
        $this->model = $ator;
        $this->request = $request;
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());
        $dataForm = $request->all();

        // Verifica se o funcionário pode atuar
        $funcionario = new Employee();
        $funcionario = $funcionario->find($dataForm['employee_id']);

        if ($funcionario['office'] === 'director') {
            return response()->json(['error' => $funcionario['name'] . " não está registrado(a) para atuação."], 500);
        }

        $data = $this->model->create($dataForm);
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        if (!$data = $this->model->find($id)) return response()->json(['error' => 'Nada foi encontrado'], 404);
        
        $this->validate($request, $this->model->rules());
        $dataForm = $request->all();

        // Verifica se o funcionário pode atuar
        $funcionario = new Employee();
        $funcionario = $funcionario->find($dataForm['employee_id']);

        if ($funcionario['office'] === 'director') {
            return response()->json(['error' => $funcionario['name'] . " não está registrado(a) para atuação."], 500);
        }

        $data->update($dataForm);
        return response()->json($data);
    }

    public function employee ($id) { 
        if (!$data = $this->model->with('employee')->find($id)) return response()->json(['error' => 'Nada foi encontrado'], 404);
        return response()->json($data);
    }

    public function movie ($id) { 
        if (!$data = $this->model->with('movie')->find($id)) return response()->json(['error' => 'Nada foi encontrado'], 404);
        return response()->json($data);
    }
}
