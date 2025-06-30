{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.admin')

@section('title', 'Dashboard')
@section('header', 'Selamat Datang di Dashboard Admin')

@section('content')
  <h5 class="mb-4">Daftar Destinasi Wisata</h5>

  @if($destinasi->count() > 0)
    <div class="row">
      @foreach($destinasi as $item)
        <div class="col-md-4 mb-4">
          <div class="card shadow-sm h-100">
            <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->nama }}">
            <div class="card-body">
              <h5 class="card-title">{{ $item->nama }}</h5>
              <p class="card-text">{{ Str::limit($item->deskripsi, 80) }}</p>
              <a href="{{ route('admin.destinasi.index') }}" class="btn btn-sm btn-primary">Detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p>Tidak ada destinasi ditemukan.</p>
  @endif
@endsection
