@extends('login.layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="page-header pricing-page header-filter" style="background-image: url({{ asset('admin/img/bg-pricing.jpg') }})">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h2 class="title">Pick the best plan for you</h2>
            <h5 class="description">You have Free Unlimited Updates and Premium Support on each package.</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing ">
              <h6 class="card-category">Poli Anak</h6>
              <div class="card-body">
                <div class="card-icon icon-rose ">
                  <i class="material-icons">weekend</i>
                </div>
                <h3 class="card-title">Free</h3>
                <p class="card-description">This is good if your company size is between 2 and 10 Persons.</p>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing ">
              <h6 class="card-category">Poli Kandungan</h6>
              <div class="card-body">
                <div class="card-icon icon-rose ">
                  <i class="material-icons">home</i>
                </div>
                <h3 class="card-title">29$</h3>
                <p class="card-description">This is good if your company size is between 2 and 10 Persons.</p>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing ">
              <h6 class="card-category">Poli Mata</h6>
              <div class="card-body">
                <div class="card-icon icon-rose ">
                  <i class="material-icons">business</i>
                </div>
                <h3 class="card-title">69$</h3>
                <p class="card-description">This is good if your company size is between 11 and 99 Persons.</p>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-pricing ">
              <h6 class="card-category">Poli HT</h6>
              <div class="card-body">
                <div class="card-icon icon-rose ">
                  <i class="material-icons">account_balance</i>
                </div>
                <h3 class="card-title">159$</h3>
                <p class="card-description">This is good if your company size is 99+ Persons.</p>
              </div>
              <div class="card-footer justify-content-center ">
                <a href="#pablo" class="btn btn-round btn-rose">Choose Plan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection