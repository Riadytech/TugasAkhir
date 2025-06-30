<div class="col-md-5 heading-section ftco-animate">
	@if($wcu)
		<span class="subheading">Why Choose Us?</span>
		<h2 class="mb-4 pb-3"><strong>{{ Str::words($wcu->judul, 1, '') }}</strong> {{ Str::after($wcu->judul, ' ') }}</h2>

		@if($wcu->poin)
			@foreach(explode("\n", $wcu->poin) as $poin)
				<p>{{ $poin }}</p>
			@endforeach
		@endif

		@if($wcu->deskripsi)
			<p>{{ $wcu->deskripsi }}</p>
		@endif

		<p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
	@else
		<p>Konten Why Choose Us belum tersedia.</p>
	@endif
</div>
