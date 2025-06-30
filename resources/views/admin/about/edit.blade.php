@extends('layouts.admin')

@section('title', 'Edit Halaman About')
@section('page-title', 'Edit Halaman About')

@section('content')
  <div class="card p-4">
    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="mb-3">
        <label class="form-label">Judul:</label>
        <input type="text" name="title" class="form-control" value="{{ $about->title ?? '' }}">
      </div>

      <div class="mb-3">
        <label class="form-label">Subjudul:</label>
        <input type="text" name="subtitle" class="form-control" value="{{ $about->subtitle ?? '' }}">
      </div>

      <div class="mb-3">
        <label class="form-label">Background Image:</label>
        <input type="file" name="background_image" class="form-control">
        @if($about && $about->background_image)
          <img src="{{ asset($about->background_image) }}" class="img-thumbnail mt-2" width="150">
        @endif
      </div>

      <div class="mb-3">
        <label class="form-label">About Image:</label>
        <input type="file" name="about_image" class="form-control">
        @if($about && $about->about_image)
          <img src="{{ asset($about->about_image) }}" class="img-thumbnail mt-2" width="150">
        @endif
      </div>

      <div class="mb-3">
        <label class="form-label">Judul Konten 1:</label>
        <input type="text" name="judul_1" class="form-control" value="{{ $about->judul_1 ?? '' }}">
      </div>

      <div class="mb-3">
        <label class="form-label">Konten 1:</label>
        <textarea name="konten_1" class="form-control" rows="3">{{ $about->konten_1 ?? '' }}</textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Judul Konten 2:</label>
        <input type="text" name="judul_2" class="form-control" value="{{ $about->judul_2 ?? '' }}">
      </div>

      <div class="mb-3">
        <label class="form-label">Konten 2:</label>
        <textarea name="konten_2" class="form-control" rows="3">{{ $about->konten_2 ?? '' }}</textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Judul Konten 3:</label>
        <input type="text" name="judul_3" class="form-control" value="{{ $about->judul_3 ?? '' }}">
      </div>

      <div class="mb-3">
        <label class="form-label">Konten 3:</label>
        <textarea name="konten_3" class="form-control" rows="3">{{ $about->konten_3 ?? '' }}</textarea>
      </div>

      <button class="btn btn-success">💾 Simpan Perubahan</button>
    </form>
  </div>
@endsection
