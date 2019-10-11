@extends('admin.layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
<div class="content">
    <div class="content">
      <div class="container-fluid">
        <h3>
          Sub Merchant |
          <a href="{{ route('administrator.create') }}" class="btn btn-success">
            <span class="btn-label">
              <i class="material-icons">add</i>
            </span>
            Sub Merchant
          </a>
        </h3>
        
        <br>
        <div class="row">
          @foreach ($submerchants as $submerchant)
          <div class="col-md-4">
            <div class="card card-product">
              <div class="card-header card-header-image" data-header-animation="true">
                <a href="#pablo">
                  <img class="img" src="images/submerchant/{{$submerchant->gambar}}">
                </a>
              </div>
              <div class="card-body">
                <div class="card-actions text-center">
                  <button type="button" class="btn btn-danger btn-link fix-broken-card">
                    <i class="material-icons">build</i> Fix Header!
                  </button>
                  <a href="{{ route('administrator.show', $submerchant->id) }}" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                    <i class="material-icons">art_track</i>
                  </a>
                  <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                    <i class="material-icons">close</i>
                  </button>
                  <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Buat Laporan">
                    <i class="material-icons">ballot</i>
                  </button>
                </div>
                <h4 class="card-title">
                  <a href="#pablo">{{$submerchant->nama}}</a>
                </h4>
                <div class="card-description">
                  {{$submerchant->deskripsi}}
                </div>
              </div>
              <div class="card-footer">
                <div class="price">
                  <h4>Jumlah Pengantre</h4>
                </div>
                <div class="stats">
                  <h4 class="card-category">99</h4>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection