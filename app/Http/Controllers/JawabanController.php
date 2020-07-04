<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use App\Pertanyaan;

class JawabanController extends Controller
{
    public function index($id){
        $pertanyaan=Pertanyaan::find($id);
        return view('tampil.jawaban', ['pertanyaan'=>$pertanyaan]);
    }

    public function answer($pertanyaan_id){
        $pertanyaan=Pertanyaan::find($pertanyaan_id);
        return view('tampil.answer', ['pertanyaan'=>$pertanyaan]);
    }
}
