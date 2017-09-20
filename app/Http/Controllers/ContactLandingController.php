<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ContactLandingController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
                'firstName'          => 'required|max:255',
                'lastName'          => 'required|max:255',
                'phone'             => 'required|numeric|phone',
                'email'             => 'required|email|max:255|unique:users',
                'note'              => 'required'
            ]);
        if ($validator->fails()) {
            return Redirect::to(URL::previous() . "#landing")
                            ->withErrors($validator)
                            ->withInput();
        }

        // Send email / save data to database
        \Mail::send(
            'partials.contactLandingView',
            [
            'fullName'          => $request->get('fullName'),
            'phone'             => $request->get('phone'),
            'email'             => $request->get('email'),
            'note'              => $request->get('note'),
            ],
            function ($message) {
                $message->from('admin@lightpointdev.com');
                $message->to('admin@lightpointdev.com', 'Admin')->subject('LightPoint Development Contact Form Submission');
            }
        );


        //Flash Message
        $request->session()->flash('alert-success', 'Thank you for your inquiry. Your email was sent successfully and we shall respond as soon as we can! - LightPoint Development');
        // Generating Redirects...with message
        return Redirect::to(URL::previous() . "#landing");
    } // end else
} // end store
