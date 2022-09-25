<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register.index',[
            'title' => "PMII Rayon Kominvpam | Register"
        ]);
    }

    public function registration(Request $request)
    {
        $validation = $request->validate([
            'nama' => 'required|max:255',
            'tgl_lahir' => 'required',
            'alamat' => 'required|max:500',
            'no_telp' => 'required|max:12',
            'fakultas' => 'required|max:255',
            'minat_bakat' => 'required|max:255'
        ]);
    }
}
