<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index() {
        return view('furniture.index', 
            [
            'lifurniture' => 'active',
            'furnitures' =>  Furniture::orderBy('model')->get(),
            ]);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        //
    }

    public function show(Furniture $furniture) {
        //
    }

    public function edit(Furniture $furniture) {
        //
    }

    public function update(Request $request, Furniture $furniture) {
        //
    }

    public function destroy(Furniture $furniture) {
        //
    }
}
