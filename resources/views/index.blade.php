@extends('layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container">
      <div class="row">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('images/bg_2.jpg') }})">
            <a href="https://vimeo.com/45830194" class="popup-vimeo d-flex justify-content-center align-items-center">
            </a>
        </div>
        <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate position-ref">
          <div class="heading-section-bold mb-5 mt-md-5">
              <div class="ml-md-0">
                <h3 class="mb-4 title">Login</h3>
            </div>
          </div>
          <div class="pb-md-5">
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                  @csrf

                  <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>

                  <div class="form-group row">
                      <div class="col-md-6 offset-md-4">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group row mb-0">
                      <div class="col-md-8 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Login') }}
                          </button>

                          @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
  </div>
</section>

  <div class="goto-here"></div>
  
  <section class="ftco-section bg-light">
      <div class="container">
              <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Poliklinik</h1>
          <h2 class="mb-4">Pilih Poliklinik</h2>
        </div>
      </div>    		
      </div>
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/product-1.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli Anak</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p>Antrian sekarang : 5/9</p>
                              </div>
                              {{-- <div class="rating">
                                  <p class="text-right">
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                  </p>
                              </div> --}}
                          </div>
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="cart.html" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/product-2.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli Kandungan</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p>Antrian sekarang : 5/9</p>
                              </div>
                              {{-- <div class="rating">
                                  <p class="text-right">
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                  </p>
                              </div> --}}
                          </div>
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="cart.html" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/product-3.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli HT</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p>Antrian sekarang : 5/9</p>
                              </div>
                              {{-- <div class="rating">
                                  <p class="text-right">
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                  </p>
                              </div> --}}
                          </div>
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="cart.html" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
              <div class="col-sm col-md-6 col-lg ftco-animate">
                  <div class="product">
                      <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('images/product-4.jpg') }}" alt="Colorlib Template"></a>
                      <div class="text py-3 px-3">
                          <h3><a href="#">Poli Mata</a></h3>
                          <div class="d-flex">
                              <div class="pricing">
                                  <p>Antrian sekarang : 5/9</p>
                              </div>
                              {{-- <div class="rating">
                                  <p class="text-right">
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                      <span class="ion-ios-star-outline"></span>
                                  </p>
                              </div> --}}
                          </div>
                          <hr>
                          <p class="bottom-area d-flex">
                              <p><a href="cart.html" class="btn btn-primary ">Ambil Antrian</a></p>                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                              {{-- <a href="#" class="ml-auto"><span><i class="ion-ios-heart-empty"></i></span></a> --}}
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- <section class="ftco-section ftco-section-more img" style="background-image: url({{ asset('images/bg_5.jpg') }})">
      <div class="container">
          <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section ftco-animate">
            <h2>Summer Sale</h2>
        </div>
      </div>
      </div>
  </section>

  <section class="ftco-section testimony-section bg-light">
    <div class="container">
              <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Testimony</h1>
        </div>
      </div>    		
      <div class="row justify-content-center">
        <div class="col-md-8 ftco-animate">
            <div class="row ftco-animate">
                <div class="col-md-12">
                  <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                      <div class="testimony-wrap py-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text text-center">
                          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p class="name">Roger Scott</p>
                          <span class="position">Customer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap py-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text text-center">
                          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p class="name">Roger Scott</p>
                          <span class="position">Customer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap py-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text text-center">
                          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p class="name">Roger Scott</p>
                          <span class="position">Customer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap py-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text text-center">
                          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p class="name">Roger Scott</p>
                          <span class="position">Customer</span>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimony-wrap py-4 pb-5">
                        <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                          <span class="quote d-flex align-items-center justify-content-center">
                            <i class="icon-quote-left"></i>
                          </span>
                        </div>
                        <div class="text text-center">
                          <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                          <p class="name">Roger Scott</p>
                          <span class="position">Customer</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h1 class="big">Blog</h1>
          <h2>Recent Blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/image_1.jpg') }})">
            </a>
            <div class="text mt-3 d-block">
              <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta mb-3">
                <div><a href="#">Dec 6, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/image_2.jpg') }})">
            </a>
            <div class="text mt-3">
              <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta mb-3">
                <div><a href="#">Dec 6, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/image_3.jpg') }})">
            </a>
            <div class="text mt-3">
              <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta mb-3">
                <div><a href="#">Dec 6, 2018</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('images/bg_4.jpg') }})">
      <div class="container">
          <div class="row justify-content-center py-5">
              <div class="col-md-10">
                  <div class="row">
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="10000">0</strong>
                      <span>Happy Customers</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="100">0</strong>
                      <span>Branches</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="1000">0</strong>
                      <span>Partner</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                  <div class="block-18 text-center">
                    <div class="text">
                      <strong class="number" data-number="100">0</strong>
                      <span>Awards</span>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
  </section>

  <section class="ftco-section bg-light ftco-services">
      <div class="container">
          <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h1 class="big">Services</h1>
          <h2>We want you to express yourself</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-4">
                  <span class="flaticon-002-recommended"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Refund Policy</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-4">
                  <span class="flaticon-001-box"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Premium Packaging</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-4">
                  <span class="flaticon-003-medal"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Superior Quality</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
      </div>
  </section> --}}
@endsection