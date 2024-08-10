<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function fetchData()
    {
        $path = storage_path("app/public/app.json");
        $json = file_get_contents($path);
        $data = json_decode($json, true);
        return response()->json($data);
    }
}