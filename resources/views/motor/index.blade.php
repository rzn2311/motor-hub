@extends('layouts.app')

@section('title', 'Data Motor')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2>Data Penjualan Motor</h2>
        <p class="text-muted mb-0">Kelola produk dan stok motor.</p>
    </div>

    <a href="{{ route('motor.create') }}" class="btn btn-primary">
        + Tambah Motor
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        Periksa kembali data yang kamu masukkan.
    </div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Spesifikasi</th>
                        <th>Harga</th>
                        <th>QTY</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($motors as $motor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $motor->nama_produk }}</td>
                            <td>{{ $motor->spesifikasi }}</td>
                            <td>Rp {{ number_format($motor->harga, 0, ',', '.') }}</td>
                            <td>{{ $motor->qty }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('motor.edit', $motor) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('motor.destroy', $motor) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin ingin menghapus data motor ini?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                Belum ada data motor. Klik Tambah Motor untuk memulai.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection