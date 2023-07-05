<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Inquiry;
use App\Models\About;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        $inquiries = Inquiry::where('status', 0)->orderBy('created_at', 'desc')->get();
        $notification = 0;
        return view ('contact')->with(['clients'=>$clients, 'about'=>$about, 
                                       'notification'=>$notification, 'inquiries'=>$inquiries]);
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
        $inquiry = new Inquiry;
        $inquiry->name = $request->input('name');
        $inquiry->email = $request->input('email');
        $inquiry->message = $request->input('message');
        $inquiry->save();

        $about = About::first();
        $notification = 1;
        return view ('contact')->with(['about'=>$about, 'notification'=>$notification]);
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
        $inquiry = Inquiry::findorFail($id);
        $inquiry->status = 1;
        $inquiry->save();

        $clients = Client::orderBy('created_at', 'desc')->get();
        $about = About::first();
        $inquiries = Inquiry::where('status', 0)->orderBy('created_at', 'desc')->get();
        $notification = 0;

        return redirect()->route('contact.index')->with([
            'clients' => $clients,
            'about' => $about,
            'notification' => $notification,
            'inquiries' => $inquiries
        ]);
    }
}
