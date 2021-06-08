<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cars = Car::all();
      return response()->json([
        'data' => $cars,
        'success' => true,
      ]);
    }
    public function store(Request $request)
    {
      $data = $request->all();
      return response()->json([
        'message' => 'car saved',
        'success' => true,
      ]);
    }
}
