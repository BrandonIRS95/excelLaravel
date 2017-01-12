<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelFilesController extends Controller
{
    public function getLista() {
        $data = Excel::load('public/files/diciembre.xls')->get();

        return response()->json(['data' => $data], 200);
    }
}
