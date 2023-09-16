<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        // $name = request('name');

        /**get data from db */
        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('name','asc')->get();
        // $pizzas = Pizza::latest()->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();

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