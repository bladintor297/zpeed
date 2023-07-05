<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        return view ('about')->with(['clients'=>$clients, 'about'=>$about]);
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
        $about = About::first();

        $about->name = $request->input('name');
        $about->email = $request->input('email');
        $about->phone = $request->input('phone');
        $about->fax = $request->input('fax');
        $about->address1 = $request->input('address1');
        $about->address2 = $request->input('address2');
        $about->address3 = $request->input('address3');
        $about->facebook = $request->input('facebook');
        $about->linkedin = $request->input('linkedin');

        $about->save();

        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        return redirect ('about')->with(['clients'=>$clients, 'about'=>$about]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
