<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function getNama($nama)
    {
        return $nama;
    }
    
public function order()
{
    return view('home.contact');
}
public function proses(Request $request)
{
    $nama = $request->nama;
    $email = $request->email;
    $subject = $request->subject;
    $isi = $request->isi;
    Mail::to('wardhana15.aw@gmail.com')->send(new TestMail([
        'nama' => $nama ,
        'email' => $email ,
        'title' => $subject ,
        'body' => $isi,
    ]));
}

}
