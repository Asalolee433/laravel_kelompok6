<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;

class LapanganController extends Controller
{
    // tampil semua data
    public function index()
    {
        $lapangans = Lapangan::all();
        return view('admin.lapangan.index', compact('lapangans'));
    }

    // form tambah
    public function create()
    {
        return view('admin.lapangan.create');
    }

    // simpan data
    public function store(Request $request)
    {
        Lapangan::create($request->all());

        return redirect('/dashboard')->with('success', 'Lapangan berhasil ditambahkan');
    }
}
