<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ContactController extends Controller
{  
    public function sendEmail(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'mobile' => 'required',
            'message' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
       
       
       
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);
       
        $data=[
            "name"=>$request->post('name'),              
            "email"=>$request->post('email'),
            "mobile"=>$request->post('mobile'), 
            "message"=>$request->post('message'),
        ];
        $recipient = 'dev@geekletters.com';                          
        $subject = 'New Contact Form Submission';

        Mail::send('emails.contact', ['data' => $data], function ($message) use ($recipient, $subject) {
            $message->to($recipient)->cc('priyavrat@cyberrafting.com')
                    ->subject($subject);
        });

        return redirect()->route('contact')->with('success', 'We have received your query. thank you');
   
        // dd($data);
        // echo "next";         
    }
}