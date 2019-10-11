@extends('layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-0 bread">Antrianku</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Antrian</span></p>
        </div>
      </div>
    </div>
  </div>
      
      <section class="ftco-section ftco-cart">
          <div class="container">
              <div class="row">
              <div class="col-md-12 ftco-animate">
                  <div class="cart-list">
                      <table class="table">
                          <thead class="thead-primary">
                            <tr class="text-center">
                              <th>&nbsp;</th>
                              <th>Nama</th>
                              <th>No Antrian</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="text-center">
                              <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
                              
                              <td class="product-name">
                                  {{-- Nama Sub Merchant --}}
                                  <h3>Poli Gigi</h3>
                                  {{-- Nama Merchant --}}
                                  <p>Rumah Sakit apa aja</p>
                              </td>
                              
                              <td class="price">9</td>

                            </tr><!-- END TR-->

                            <tr class="text-center">
                              <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>
                              
                              <td class="product-name">
                                    {{-- Nama Sub Merchant --}}
                                    <h3>Poli Gigi</h3>
                                    {{-- Nama Merchant --}}
                                    <p>Rumah Sakit apa aja</p>
                                </td>
                                
                              <td class="price">17</td>
                                                           
                            </tr><!-- END TR-->
                          </tbody>
                        </table>
                    </div>
              </div>
          </div>
          </div>
      </section>
@endsection