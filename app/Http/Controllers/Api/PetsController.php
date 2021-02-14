<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\PetsService;
use App\Http\Controllers\Controller;

class PetsController extends Controller
{
    private $service;

    public function __construct(PetsService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = ['data' => $this->service->getAll()];
        return response()->json($data);
    }

    public function show($id)
    {
        $data = ['data' => $this->service->get($id)];
        return response()->json($data);
    }

    public function store(Request $request)
    {
       $store = $this->service->store($request);
       
       return response()->json($store);
    }

    public function update(Request $request, $id)
    {
       $update = $this->service->update($request, $id);

       return response()->json($update);

    }

    public function delete($id)
    {
        $delete = $this->service->delete($id);

        return response()->json($delete);
    }
}

