<?php

// 1. Installation via composer
// composer require theuzsoft/pinterest-api-sdk

// 2. Add your RAPIDAPI_KEY to your .env file:
// RAPIDAPI_KEY=your_rapidapi_key_here

// 3. Example usage in a Laravel Controller:
namespace App\Http\Controllers;

use TheUzSoft\\Pinterest\Facades\Pinterest;
use Illuminate\Http\Request;

class ApiTestController extends Controller
{
    public function index()
    {
        try {
            // Using the Facade to execute request
            $result = Pinterest::downloadPin('https://www.pinterest.com/pin/123/');
            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
