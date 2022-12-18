<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StorePeopleRequest;
use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PeopleController extends Controller
{
    
    public function index(): JsonResponse
    {
        return response()->json(people::all(), 200);
    }
    public function create(StorepeopleRequest $request): JsonResponse
    {
        $people = people::create($request->all());

        return response()->json($people, 201);
    }
    public function read(people $people): JsonResponse
    {
        return response()->json($people, 200);
    }
  
    public function update(Request $request, people $people): JsonResponse
    {
        $people->update($request->all());

        return response()->json($people, 200);
    }
    public function delete(people $people): JsonResponse
    {
        $people->delete();

        return response()->json(null, 204);
    }
}
