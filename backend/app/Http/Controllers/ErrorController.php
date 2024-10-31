<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error(){
        throw new \Exception("Something went wrong.");
    }
}
