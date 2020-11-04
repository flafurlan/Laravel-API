<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogsController extends Controller
{
    public function index()
    {
        return Dog::all();
    }
    public function create(){}
    
    public function store(Request $request)
    {
        # print_r($request->all());
        return Dog::create($request->all());
    }

    public function show($id)
    {
        return Dog::findOrFail($id);
    }

    public function edit($id){}

    public function update(Request $request, $id)
    {
        $dog = Dog::findOrFail($id);
        return $dog->update($request->all());
    }

    public function destroy($id)
    {
        $dog = Dog::findOrFail($id);
        return $dog->delete();
    }
}
