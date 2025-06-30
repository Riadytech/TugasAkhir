<section class="ftco-section ftco-destination">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Wisata</span>
                <h2 class="mb-4"><strong>Rekomendasi</strong> Destinasi Wisata</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="destination-slider owl-carousel ftco-animate">
                    @foreach ($destinasi as $item)
                        <div class="item">
                            <div class="destination">
                                <a href="{{ route('destinasi.detail', $item->id) }}" class="img d-flex justify-content-center align-items-center"
                style="background-image: url('{{ asset('storage/' . $item->gambar) }}');">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="#">{{ $item->nama_destinasi }}</a></h3>
                                    <p class="mb-1"><strong>Alamat:</strong> {{ $item->alamat }}</p>
                                    <p class="mb-1"><strong>Deskripsi:</strong> {{ Str::limit($item->deskripsi, 100) }}</p>
                                    <p class="mb-1"><strong>Koordinat:</strong> {{ $item->latitude }}, {{ $item->longitude }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
