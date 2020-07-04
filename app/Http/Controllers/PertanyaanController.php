<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = \App\Pertanyaan::all();
        return view('tampil.index',['pertanyaan' => $pertanyaan]);
    }
    public function create(){
        $pertanyaan = \App\Pertanyaan::all();
        return view('tampil.create',['pertanyaan' => $pertanyaan]);
    }
    public function store(Request $request){
        {
            \App\Pertanyaan::create($request->all());
            return redirect('/');
        }
    }
}
