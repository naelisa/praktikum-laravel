<?php

namespace App\Http\Controllers;
use App\Models\Matkul;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
{
    $matkuls = Matkul::all();
    return view('mahasiswa.index', compact('matkuls'));
}
}