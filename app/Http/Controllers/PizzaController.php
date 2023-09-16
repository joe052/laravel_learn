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
        $pizzas = Pizza::orderBy('name', 'asc')->get();
        // $pizzas = Pizza::latest()->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();

        return view('pizzas.index', ['pizzas' => $pizzas,]);
        // return ['pizzas' => $pizzas];
    }

    public function show($id)
    {
        //use the $id variable to query the db for a record
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }
}