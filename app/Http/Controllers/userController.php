<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $users= DB::table("users")->get();
     return view("index.users");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create.users");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       DB::table("users")->insert([(
        "name"=> $request->$name,
        "email"=>$request->email,
        "password"=>$request->password,
        "mobile"=>$request->mobile,
        "address"=>$request->address,
       )]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    $users= DB::table("users")->get();
     return view("index.users");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       return view("edit.users");
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
        
    }
}
