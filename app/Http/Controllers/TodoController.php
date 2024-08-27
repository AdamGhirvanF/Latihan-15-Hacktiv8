<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $data = Todo::all();
        return response()->json([
            'Message' => 'Success show data',
            'Data' => $data], 200);;
    }

    public function show($id)
    {
        $data = Todo::find($id);
        if(!($data)) return response()->json(['Message' => 'To do not found'], 404);

        return response()->json([
            'Message' => 'Success show data',
            'Data' => $data], 200);;

    }

    public function store(Request $req)
    {
        $data = Todo::create($req->all());

        return response()->json([
            'Message' => 'Success create data',
            'Data' => $data], 200);;
    }

    public function update(Request $req, $id)
    {
        $data = Todo::find($id);
        if(!($data)) return response()->json(['Message' => 'To do not found'], 404);

        $data->update($req->all());
        return response()->json([
            'Message' => 'Success update data',
            'Data' => $data], 200);
    }

    public function destroy($id)
    {
        $data = Todo::find($id)->delete();
        if(!($data)) return response()->json(['Message' => 'To do not found'], 404);

        return response()->json([
            'Message' => 'Success remove data',
            'Data' => $data], 200);
    }
}
