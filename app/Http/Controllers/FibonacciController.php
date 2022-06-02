<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('fibonacci.view', [
            'row' => $request->row,
            'column' => $request->column,
            'nol' => 0,
            'satu' => 1,
        ]);
    }
}
