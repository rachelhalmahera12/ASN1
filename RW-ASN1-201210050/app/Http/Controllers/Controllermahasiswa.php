<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class Controllermahasiswa extends Controller
{
    public function create (Request $request)
    {
        $data = $request->all();
        $mahasiswa = mahasiswa :: create($data);

        return response()->json($mahasiswa);
    }
}