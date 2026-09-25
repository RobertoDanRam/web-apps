<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner; //importamos el modelo 

class OrderController extends Controller
{
    public function getOwner()
    {
        // enviamos dato del modelo a la vista
        return view('Owner', ["message" => Owner::getOwnerName()]);
    }
}