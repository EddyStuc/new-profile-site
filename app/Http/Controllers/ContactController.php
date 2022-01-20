<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create()
    {
        $data = request()->validate([
            'name' => ['required', 'max:255'],
            'subject' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'max:255'],
        ]);

        Mail::to('receiver@gmail.com')->send(new ContactMail($data));

        return redirect(route('contact'));
    }
}
