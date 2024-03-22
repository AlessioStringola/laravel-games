<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }
    public function detail(){
        return view('detail');
    }
    public function formemail(){
        return view('formemail');
    }
    public function sendEmail(MailRequest $request){
        Mail::to($request->email)->send(new ConfirmationEmail($request->username));
        return redirect()->route('game.index')->with('success','Grazie per averci contattato');
    }
}
