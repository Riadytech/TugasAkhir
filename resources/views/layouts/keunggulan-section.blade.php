<section class="ftco-section services-section bg-light">
  <div class="container">
    <div class="row d-flex">
      @foreach($keunggulan as $item)
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services d-block text-center">
            <div class="d-flex justify-content-center">
              <div class="icon"><span class="{{ $item->icon }}"></span></div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3">{{ $item->judul }}</h3>
              <p>{{ $item->deskripsi }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
