<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class SingleEventController extends Controller
{
    public function index($id){
        $results = Event::find($id);
        $data = [
            "success" => true,
            "payload" => $results
        ];
        return response()->json($data);
    }
}
