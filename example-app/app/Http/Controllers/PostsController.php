<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return "it is working, and the number is" . $id;
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
        return "this is a place holder, this is the show method" . $id;
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

    public function contact(){
        return view('contact');
        // if not in the view directory, can use:   return view('pages.contact')
    }

    public function show_post($id){ // var is passed from the url to the function
        return view('post')->with('id', $id); // this function automatically search all the files named post in the view folder
    }

    public function multiple_parameter($id, $name, $password){
        return view('post', compact('id', 'name', 'password'));
    }
    
}
