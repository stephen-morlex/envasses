<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Contact;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name'      => 'required|max:100|min:1',
            'email'         => 'required|email',
            'message'       => 'required|min:5',
            'phone'       => 'required|numeric|min:7',
        ]);
        Contact::create($request->all());
        Mail::send(
            'contact.mail',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message'),
                'phone' => $request->get('phone')
            ),
            function ($message) {
                $message->from("stephenvicson@gmail.com");
                $message->to('stephenvicson@gmail.com', 'Admin')->subject('Contact information from your website');
            }
        );
        Session::flash('success', 'thanks for contacting us, we will return to you within the 24 hours of the work');
        return redirect()->back();
    }
}