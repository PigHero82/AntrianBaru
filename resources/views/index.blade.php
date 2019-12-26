@extends('layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('images/rsbgee.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-11 ftco-animate text-center">
        <h1>SakuAntri</h1>
        <h2><span>Aplikasi Antrian</span></h2>
      </div>
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
        </a>
      </div>
    </div>
  </div>
</div>

  <div class="goto-here"></div>

  <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Antrian</h1>
          <h2 class="mb-4">Pilih Antrian</h2>
        </div>
      </div>    		
      </div>
      <div class="container-fluid">
          <div class="row">
							@foreach ($submerchants as $submerchant)
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
									<a href="{{ route('show.antrian', $submerchant->id) }}" class="img-prod"><img class="img-fluid" src="{{ asset('images/submerchant/'.$submerchant->gambar) }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="{{ route('show.antrian', $submerchant->id) }}">{{$submerchant->nama}}</a></h3>
                          <h3><a href="{{ route('show.antrian', $submerchant->id) }}">{{$submerchant->name}}</a></h3>
                          {{-- <h3><a href="#">Antrian sekarang : 5/9</a></h3> --}}
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="/cart" class="btn btn-primary ">Ambil Antrian</a></p>
                          </p>
                      </div>
                  </div>
              </div>
              @endforeach
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/rs1.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli Kandungan</a></h3>
                          <h3><a href="#">Rumah Sakit ABC</a></h3>
                          <h3><a href="#">Antrian sekarang : 5/9</a></h3>
                          {{-- <h3><a href="#">Antrian sekarang : 5/9</a></h3> --}}
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="/cart" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/rs2.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli HT</a></h3>
                          <h3><a href="#">Rumah Sakit ABC</a></h3>
                          <h3><a href="#">Antrian sekarang : 5/9</a></h3>
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="/cart" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/rs3.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli Mata</a></h3>
                          <h3><a href="#">Rumah Sakit ABC</a></h3>
                          <h3><a href="#">Antrian sekarang : 5/9</a></h3>
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="/cart" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
            </div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-12 text-center">
								<p><a href="/shop" class="btn btn-primary  py-2 px-4">Lihat Semua</a></p>
							</div>
						</div>
      </div>
  </section>
@endsection