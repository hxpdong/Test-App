<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function hello(){
        return response()->json([
            'success' => true,
            'message' => 'Hello Deltabrains'
        ]);
    }
}