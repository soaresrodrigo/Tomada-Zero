<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Models\Employee;

class MovieController extends MasterApiController
{
    protected $model;

    function __construct(Movie $filme, Request $request)
    {
        $this->model = $filme;
        $this->request = $request;
    }
    

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());
        $dataForm = $request->all();

        // Verifica se o funcionário é ator
        $funcionario = new Employee();
        $funcionario = $funcionario->find($dataForm['director_id']);

        if ($funcionario['office'] === 'actor') {
            return response()->json(['error' => $funcionario['name'] . " não está registrado(a) para direção."], 500);
        }

        $data = $this->model->create($dataForm);
        return response()->json($data, 201);
    }

    public function update(Request $request, $id)
    {
        if (!$data = $this->model->find($id)) return response()->json(['error' => 'Nada foi encontrado'], 404);
        
        $this->validate($request, $this->model->rules());
        $dataForm = $request->all();

        // Verifica se o funcionário é ator
        $funcionario = new Employee();
        $funcionario = $funcionario->find($dataForm['director_id']);

        if ($funcionario['office'] === 'actor') {
            return response()->json(['error' => $funcionario['name'] . " não está registrado(a) para direção."], 500);
        }

        $data->update($dataForm);
        return response()->json($data);
    }

    public function informaTudo ($id) { 
        if (!$data = $this->model->with(['director', 'classification', 'actors'])->find($id)) return response()->json(['error' => 'Nada foi encontrado'], 404);
        
        return response()->json($data);
    }
}
