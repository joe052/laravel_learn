<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        //get data from db   
        $pizzas = Pizza::all();

        $name = request('name');

        return view('pizzas', [
            'pizzas' => $pizzas,            
        ]);
        // return ["name"=>"pizzas", "store"=>"KFC"];
    }

    public function show($id)
    {
        //use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}