<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('contact.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        Contact::create($request->all());
        return redirect()->route('contact.index')
            ->with('success', 'Your message has been sent successfully');
    }
}
