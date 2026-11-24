<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::OrderBy("id", "DESC")->paginate(10);
        return response()->json($mahasiswa, 200);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $mahasiswa = Mahasiswa::create($input);
        return response()->json($mahasiswa, 200);
    }

    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            abort(404);
        }
        return response()->json($mahasiswa, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $mahasiswa = Mahasiswa::find($id);
        
        if (!$mahasiswa) {
            abort(404);
        }

        $mahasiswa->fill($input);
        $mahasiswa->save();

        return response()->json($mahasiswa, 200);
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        
        if (!$mahasiswa) {
            abort(404);
        }

        $mahasiswa->delete();
        $message = ['message' => 'deleted successfully', 'mahasiswa_id' => $id];

        return response()->json($message, 200);
    }
}