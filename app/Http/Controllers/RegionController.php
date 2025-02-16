<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\province;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function index()
    {
        $provinces = province::with('cities')->get();
        return view('form', compact('provinces'));
    }

    public function create()
    {
        $provinces = province::with('cities')->get();
        return view('form', compact('provinces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaProvinsi' => 'required|unique:provinces,namaProvinsi',
            'namaKota' => 'required',
            'level' => 'required',
        ]);

        // Simpan data ke tabel provinces
        $province = province::create([
            'namaProvinsi' => $request->namaProvinsi
        ]);

        // Simpan data ke tabel cities
        city::create([
            'namaKota' => $request->namaKota,
            'level' => $request->level,
            'province_id' => $province->id,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
}
