<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;


class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $destinasi = Destinasi::all();  // Ambil semua destinasi
    return view('admin.destinasi.index', compact('destinasi'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $request->validate([
        'nama_destinasi' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'alamat' => 'required|string',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->all();

    if ($request->hasFile('gambar')) {
        $data['gambar'] = $request->file('gambar')->store('gambar_destinasi', 'public');
    }

    Destinasi::create($data);

    return redirect()->route('admin.destinasi.index')->with('success', 'Destinasi berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     */
    public function show(destinasi $destinasi)
    {
        return view('admin.destinasi.show', compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(destinasi $destinasi)
    {
        return view('admin.destinasi.edit', compact('destinasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, destinasi $destinasi)
    {
        $request->validate([
            'nama_destinasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $destinasi->update($request->all());

        return redirect()->route('admin.destinasi.index')->with('success', 'Destinasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destinasi $destinasi)
    {
        $destinasi->delete();

        return redirect()->route('admin.destinasi.index')->with('success', 'Destinasi berhasil dihapus!');
    }
}
