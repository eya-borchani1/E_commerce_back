<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class BaseController extends Controller
{
    protected $model; // The model class to use

    public function index()
    {
        $data = $this->model::all();
        return response()->json(['message' => 'Data retrieved successfully', 'data' => $data]);
    }

    public function show($id)
    {
        $item = $this->model::findOrFail($id);
        return response()->json(['message' => 'Data retrieved successfully', 'data' => $item]);
    }

    public function store(Request $request)
    {
        $item = $this->model::create($request->all());
        return response()->json(['message' => 'Data created successfully', 'data' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = $this->model::findOrFail($id);
        $item->update($request->all());
        return response()->json(['message' => 'Data updated successfully', 'data' => $item]);
    }

    public function destroy($id)
    {
        $item = $this->model::findOrFail($id);
        $item->delete();
        return response()->json(['message' => 'Data deleted successfully', 'data' => $item]);
    }
}
