<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // TODO: kirim email atau simpan di DB
        // contoh sementara: redirect dengan pesan sukses
        return redirect()->route('contact')->with('success', 'Pesan terkirim. Terima kasih!');
    }
}
