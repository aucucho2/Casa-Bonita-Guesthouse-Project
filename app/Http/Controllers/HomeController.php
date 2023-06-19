<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function send(Request $request) {
        // TODO: Por validar os inputs
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'Check In' => 'required',
            'Check Out' => 'required',
            'Adults' => 'required',
            'Children' => 'required',
            'Rooms' => 'required',
            'Room Type' => 'required',
        ]);
        }

}
