<?php

namespace App\Http\Controllers\Api;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use App\Pet;
use App\Http\Requests\PetRequest;

class PetController extends Controller
{
    private $pet; 

    public function __construct(Pet $pet)
    {   
        $this->pet = $pet;
    }

    public function index()
    {
        $pet = $this->pet->paginate('10');

        return response()->json($pet, 200);
    }

    public function store(PetRequest $request)
    {
        $data = $request->all();

        try{
            $pet = $this->pet->create($data);
            
            return response()->json([
                'data' => [
                    'msg' => 'Pet cadastrado com sucesso!',
                    'id' => $pet['id']
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
            $pet = $this->pet->with('atendimento')->findOrFail($id);

            return response()->json([
                'msg' => 'Pet encontrado!',
                'data' => $pet
            ], 200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }

    public function update(PetRequest $request, $id)
    {
        $data = $request->all();

        try{
            $pet = $this->pet->findOrFail($id);
            $pet->update($data);

            return response()->json([
                'data' => [
                    'msg' => 'Pet atualizado com sucesso!'
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
            $pet = $this->pet->findOrFail($id);
            $pet->delete();

            return response()->json([
                'data' => [
                    'msg' => 'Pet removido com sucesso!'
                ]
            ], 200);
        }catch(\Exception $e){
            $message = new ApiMessages($e->getMessage());
            return response()->json($message->getMessage(), 401);
        }
    }
}
