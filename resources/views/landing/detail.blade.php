@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>{{ $destinasi->nama_destinasi }}</h1>
    <p>{{ $destinasi->deskripsi }}</p>
    
    <p><strong>Alamat:</strong> {{ $destinasi->alamat }}</p>
    
    <p><strong>Koordinat:</strong> Latitude {{ $destinasi->latitude }}, Longitude {{ $destinasi->longitude }}</p>
    
    <a href="{{ route('landing') }}" class="btn btn-secondary mt-3">Kembali ke Beranda</a>
</div>
@endsection
