@extends('layouts.app')

@section('title', 'Tambah Motor')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">

        <div class="mb-4">
            <h2 class="fw-bold mb-2">Tambah Data Motor</h2>
            <p class="text-secondary mb-0">
                Lengkapi informasi produk motor yang ingin ditambahkan.
            </p>
        </div>

        <div class="card shadow-sm">
            <div class="card-header">
                <h4 class="fw-bold mb-1">Informasi Produk</h4>
                <small class="text-white-50">
                    Formulir penambahan inventaris motor
                </small>
            </div>

            <div class="card-body">

                @if($errors->any())
                    <div class="alert alert-danger">
                        Periksa kembali data yang kamu masukkan.
                    </div>
                @endif

                <form action="{{ route('motor.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Nama Produk</label>
                        <input type="text"
                               name="nama_produk"
                               class="form-control"
                               placeholder="Contoh: Honda Vario 160"
                               value="{{ old('nama_produk') }}"
                               required>
                        @error('nama_produk')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Spesifikasi</label>
                        <textarea name="spesifikasi"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Masukkan spesifikasi motor..."
                                  required>{{ old('spesifikasi') }}</textarea>
                        @error('spesifikasi')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-7 mb-4">
                            <label class="form-label fw-semibold">Harga (Rp)</label>
                            <input type="number"
                                   name="harga"
                                   class="form-control"
                                   placeholder="28000000"
                                   min="0"
                                   step="1"
                                   value="{{ old('harga') }}"
                                   required>
                            @error('harga')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-5 mb-4">
                            <label class="form-label fw-semibold">QTY / Stok</label>
                            <input type="number"
                                   name="qty"
                                   class="form-control"
                                   placeholder="10"
                                   min="0"
                                   value="{{ old('qty', 0) }}"
                                   required>
                            @error('qty')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <hr class="my-3">

                    <div class="d-flex justify-content-between gap-2 flex-wrap">
                        <a href="{{ route('motor.index') }}"
                           class="btn btn-outline-secondary">
                            Kembali
                        </a>

                        <button type="submit" class="btn btn-orange">
                            Simpan Data Motor
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

@endsection