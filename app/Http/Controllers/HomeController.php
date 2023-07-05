<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\About;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        return view ('welcome')->with(['clients'=>$clients, 'about'=>$about]);
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
    
    public function terms ()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        return view ('terms')->with(['clients'=>$clients, 'about'=>$about]);
    }

    public function privacy ()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        return view ('privacy')->with(['clients'=>$clients, 'about'=>$about]);
    }
}
