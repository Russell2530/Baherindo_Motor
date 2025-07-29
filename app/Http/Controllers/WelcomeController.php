<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $motor = [
            ['id' => 1, 'name' => 'Motor Yamaha', 'price' => 30000000, 'tahun' => 2020, 'km' => 100000],
            ['id' => 2, 'name' => 'Motor Kawasaki', 'price' => 100000000, 'tahun' => 2023, 'km' => 60000],
            ['id' => 3, 'name' => 'Motor Honda', 'price' => 35000000, 'tahun' => 2022, 'km' => 40000],
            ['id' => 4, 'name' => 'Motor Vespa', 'price' => 70000000, 'tahun' => 2021, 'km' => 50000],
            ['id' => 5, 'name' => 'Motor Suzuki', 'price' => 40000000, 'tahun' => 2020, 'km' => 150000],
            ['id' => 6, 'name' => 'Motor Supra', 'price' => 10000000, 'tahun' => 2015, 'km' => 200000],
        ];
        return view('welcome', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
