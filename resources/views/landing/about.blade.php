@include('layouts.navbar-section')
@include('layouts.header-section')

<div class="hero-wrap" style="background-image: url('{{ asset($about->background_image ?? 'images/bg_1.jpg') }}'); padding: 100px 0;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-2 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            {{ $about->title ?? 'Tentang kami' }}
        </h1>
        <h2 class="mb-4" style="color: white;" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            {{ $about->subtitle ?? 'Menjelajahi Indramayu dari perspektif yang baru' }}
        </h2>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 ftco-animate img about-image" style="background-image: url('{{ asset($about->about_image ?? 'images/about.jpg') }}');"></div>
            <div class="col-md-6 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>
                            <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>
                            <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                <div>
                                    <h2 class="mb-4">{{ $about->judul_1 ?? 'What we do' }}</h2>
                                    <p>{!! nl2br(e($about->konten_1 ?? '...')) !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                                <div>
                                    <h2 class="mb-4">{{ $about->judul_2 ?? 'Our mission' }}</h2>
                                    <p>{!! nl2br(e($about->konten_2 ?? '...')) !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                                <div>
                                    <h2 class="mb-4">{{ $about->judul_3 ?? 'Our goal' }}</h2>
                                    <p>{!! nl2br(e($about->konten_3 ?? '...')) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">FAQS</span>
                <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
            </div>
        </div>
        {{-- FAQ masih statis --}}
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div id="accordion">
                    {{-- FAQ card accordion tetap pakai HTML seperti sebelumnya --}}
                    {{-- Bisa dibuat dinamis nanti jika diinginkan --}}
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer-section')
@include('layouts.script-section')
