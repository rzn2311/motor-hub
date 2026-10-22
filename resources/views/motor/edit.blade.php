@extends('layouts.app')

@section('title', 'Edit Motor')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h4 class="mb-0">Edit Data Motor</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('motor.update', $motor) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama_produk"
                       class="form-control"
                       value="{{ old('nama_produk', $motor->nama_produk) }}"
                       required>
                @error('nama_produk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Spesifikasi</label>
                <textarea name="spesifikasi" class="form-control"
                          rows="4" required>{{ old('spesifikasi', $motor->spesifikasi) }}</textarea>
                @error('spesifikasi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Harga (Rp)</label>
                <input type="number" name="harga"
                       class="form-control" min="0" step="1"
                       value="{{ old('harga', $motor->harga) }}"
                       required>
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">QTY / Stok</label>
                <input type="number" name="qty"
                       class="form-control" min="0"
                       value="{{ old('qty', $motor->qty) }}"
                       required>
                @error('qty')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">
                Update
            </button>

            <a href="{{ route('motor.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</div>

@endsection