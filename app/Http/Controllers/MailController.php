<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContact;
use Mail;
use App\Http\Requests\RequestContact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class MailController extends Controller
{
    /**
     * Display a listing of the resource. 
    */
    public function index(RequestContact $request)
    {
        $now = Carbon::now();
        $mailData = [
            'title' => $request->title,
            'body' => $request->comment,
            'subject' => $request->subject,
            'doc' => $request->file('file')
        ];
    
        $doc = $request->file('file');
        $archivo = $now->timestamp . '-' . $doc->getClientOriginalName();
        $doc->move(public_path('documents'), $archivo);
        Mail::to($request->email)->send(new MailContact($mailData,$archivo));
            
        return redirect()->route('main');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function main(Request $request)
    {
        return view('contact');
    }
    public function getCurriculum(Request $request)
    {
        return view('curriculum');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
}
