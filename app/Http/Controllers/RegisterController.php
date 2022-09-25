<?php

namespace App\Http\Controllers;

use App\Models\Participant;
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
            'fakultas' => 'required',
            'minat_bakat' => 'required|max:255'
        ]);

        Participant::create($validation);
        return redirect('/daftar')->with('message', 
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Terima kasih,</strong> Telah mendaftarkan diri untuk bergabung menjadi keluarga kami
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
    }
}
