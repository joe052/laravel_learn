<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        //get data from db   
        $pizzas = [
            ["type" => "hawaiian", "base" => "cheesy crust", "price" => "200"],
            ["type" => "volcano", "base" => "garlic crust", "price" => "150"],
            ["type" => "veg supreme", "base" => "thin & crispy", "price" => "25"]
        ];

        $name = request('name');

        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => request('age')
        ]);
        // return ["name"=>"pizzas", "store"=>"KFC"];
    }

    public function show($id)
    {
        //use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}