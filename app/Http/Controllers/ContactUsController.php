<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string|max:200',
            'phone' => 'required|string',
            'comments' => 'required|string',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'comments' => $request->comments,
        ];
        Mail::to('info@kahasolusi.com')->send(new ContactUsEmail($data));

        return redirect('/#contact')->with([
            'message' => 'Email Berhasil dikirim! Akan Kami Hubungi Kembali Maksimal 1x24 Jam',
        ]);
    }
}
