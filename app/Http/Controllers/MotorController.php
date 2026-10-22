<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        $motors = Motor::latest()->get();

        return view('motor.index', compact('motors'));
    }

    public function create()
    {
        return view('motor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'spesifikasi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'qty' => 'required|integer|min:0',
        ]);

        Motor::create($request->only([
            'nama_produk',
            'spesifikasi',
            'harga',
            'qty',
        ]));

        return redirect()->route('motor.index')
            ->with('success', 'Data motor berhasil ditambahkan!');
    }

    public function edit(Motor $motor)
    {
        return view('motor.edit', compact('motor'));
    }

    public function update(Request $request, Motor $motor)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'spesifikasi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'qty' => 'required|integer|min:0',
        ]);

        $motor->update($request->only([
            'nama_produk',
            'spesifikasi',
            'harga',
            'qty',
        ]));

        return redirect()->route('motor.index')
            ->with('success', 'Data motor berhasil diperbarui!');
    }

    public function destroy(Motor $motor)
    {
        $motor->delete();

        return redirect()->route('motor.index')
            ->with('success', 'Data motor berhasil dihapus!');
    }
}