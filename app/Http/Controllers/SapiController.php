<?php

namespace App\Http\Controllers;

use App\Models\Sapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sapi = Sapi::all();
        return view('sapi.index', compact('sapi'));
    }

    public function create()
    {
        return view('sapi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $berat = $request->beratSapi;
        $jenis = $request->jenisSapi;
        $harga = $request->hargaSapi;
        $kesehatan = $request->kesehatanSapi;

        $gambar = $request->file('gambar')->store('public/images');
        $sapi = new Sapi;
        // $sapi->gambar = $gambar;
        $sapi->gambar = str_replace('public/', '', $gambar);
        $sapi->beratSapi = $berat;
        $sapi->jenisSapi = $jenis;
        $sapi->hargaSapi = $harga;
        $sapi->kesehatanSapi = $kesehatan;
        $sapi->save();
        // dd($sapi);
        return redirect()->route('sapi.index')->with('success', 'Sapi berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $sapi = Sapi::find($id);
        return view('sapi.edit', compact(['sapi']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sapi = Sapi::find($id);
        if ($request->file('gambar') != null || $request->file('gambar') != '') {
            Storage::delete('public/'.$sapi->gambar);
            $gambar = $request->file('gambar')->store('public/images');
            $sapi->gambar = str_replace('public/', '', $gambar);
        } else {
            # code...
        }
        $berat = $request->beratSapi;
        $jenis = $request->jenisSapi;
        $harga = $request->hargaSapi;
        $kesehatan = $request->kesehatanSapi;

        $sapi->beratSapi = $berat;
        $sapi->jenisSapi = $jenis;
        $sapi->hargaSapi = $harga;
        $sapi->kesehatanSapi = $kesehatan;
        $sapi->save();
        return redirect('sapi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sapi = Sapi::find($id);
        Storage::delete('public/'.$sapi->gambar);
        $sapi->delete();
        return back();
        // dd($sapi);
    }
}
