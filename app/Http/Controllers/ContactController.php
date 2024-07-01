<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $req) {
        $validation = $req->validate([
            'name' => 'required|min:4|max:20',
            'email' => 'required|min:4|max:30',
            'subject' => 'required|min:4|max:30',
            'message' => 'required|min:4|max:200',
        ]);
    }
}
