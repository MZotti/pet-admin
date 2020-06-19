<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Atendimento;
use App\Http\Requests\AtendimentoRequest;

class AtendimentoController extends Controller
{
    private $atendimento; 

    public function __construct(Atendimento $atendimento)
    {   
        $this->atendimento = $atendimento;
    }

    public function index()
    {
        $atendimento = $this->atendimento->paginate('10');

        return response()->json($atendimento, 200);
    }

    public function store(AtendimentoRequest $request)
    {
        $data = $request->all();

        try{
            $atendimento = $this->atendimento->create($data);
            
            return response()->json([
                'data' => [
                    'msg' => 'Atendimento cadastrado com sucesso!',
                    'id' => $atendimento['id']
                ]
            ], 200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function show($id)
    {
        try{
            $atendimento = $this->atendimento->findOrFail($id);

            return response()->json([
                'msg' => 'Atendimento encontrado!',
                'data' => $atendimento
            ], 200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function update(AtendimentoRequest $request, $id)
    {
        $data = $request->all();

        try{
            $atendimento = $this->atendimento->findOrFail($id);
            $atendimento->update($data);

            return response()->json([
                'data' => [
                    'msg' => 'Atendimento atualizado com sucesso!'
                ]
            ], 200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function destroy($id)
    {
        try{
            $atendimento = $this->atendimento->findOrFail($id);
            $atendimento->delete();

            return response()->json([
                'data' => [
                    'msg' => 'Atendimento removido com sucesso!'
                ]
            ], 200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
