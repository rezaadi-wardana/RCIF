<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //order
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
    return 'Nama: '.$nama.', Email: '.$email. ', Subject: ' .$subject. ', Isi:' .$isi;
}
}
