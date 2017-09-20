<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        /*$contacts = Contact::with(['email'])->find($id);*/

        $validator = Validator::make($request->all(), [
                'firstName'         => 'required|max:255',
                'lastName'          => 'required|max:255',
                'email'             => 'required|max:255|unique:users',
                'companyName'       => 'required|max:255|min:6',
                'url'               => 'max:255',
                'note'              => 'required'
                /*'organizationType'  =>  ''*/
                ]);
        if ($validator->fails()) {
            return Redirect::to(URL::previous() . "#contact")
                            ->withErrors($validator)
                            ->withInput();
        }

        // Send email / save data to database
        \Mail::send(
            'partials.contactView',
            [
            'firstName'         => $request->get('firstName'),
            'lastName'          => $request->get('lastName'),
            'email'             => $request->get('email'),
            'companyName'       => $request->get('companyName'),
            'organizationType'  => $request->get('organizationType'),
            'note'              => $request->get('note'),
            'url'               => $request->get('url')
            ],
            function ($message) {
                $message->from('admin@lightpointdev.com');
                $message->to('admin@lightpointdev.com', 'Admin')->subject('LightPoint Development Contact Form Submission');
            }
        );


        //Flash Message
        $request->session()->flash('alert-success', 'Thank you for your inquiry. Your email was sent successfully and we shall respond as soon as we can! - LightPoint Development');
        // Generating Redirects...with message
        return Redirect::to(URL::previous() . "#contact");
    } // end else
} // end store
