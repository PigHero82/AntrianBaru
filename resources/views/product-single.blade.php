@extends('layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread">Product Single</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
        </div>
      </div>
    </div>
  </div>
      
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 ftco-animate">
      <a href="images/submerchant/{{$submerchant->gambar}}" class="image-popup"><img src="{{ asset('images/submerchant/'.$submerchant->gambar) }}" class="img-fluid" alt="Colorlib Template"></a>
      </div>
      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
        <h3>{{$submerchant->nama}}</h3>
        <h3>{{$submerchant->name}}</h3>
        {{-- <h3>PT. ABC</h3> --}}
        <p>{{$submerchant->deskripsi}}</p>
        <h5>Jumlah Pengantre : {{$countall}}</h5>
        <h5>Antrian saat ini : {{$countactive}}</h5>
        <div class="row mt-4">
          <form action="{{ route('submerchant.store') }}" method="post">
            @csrf
            <div class="form-group">
              <input type="text" id="idantre" name="idantre" class="form-control" value="{{$submerchant->id}}" hidden>
              <input type="submit" value="Submit" class="btn btn-primary py-2 px-4">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection