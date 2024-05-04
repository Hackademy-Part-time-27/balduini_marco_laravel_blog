<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewForm()
    {
        return view('pages.contacts');
    }

    public function send(Request $request)
    {
        //dd($request->all());

        //dd($request->email());
        //dd($request->message());

        if($request->email == '') {
            return redirect()->back()->with(['error' => 'Il campo email non può essere vuoto.']);
        }

        if($request->message == '') {
            return redirect()->back()->with(['error' => 'Il campo messaggio non può essere vuoto.']);
        }
        
        // return (new \App\Mail\ContactMail($request->email, $request->message))->render();

        \Illuminate\Support\Facades\Mail::to('admin@example.com')
            -> send(new \App\Mail\ContactMail($request->email, $request->message));

        return redirect()->back()->with(['success' => 'Richiesta inviata correttamente!']);
    }
}
