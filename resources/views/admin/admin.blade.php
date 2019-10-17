@extends('admin.layoutsadmin')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('content')
    <div class="content">
      <div class="container-fluid">
        <h3>
          Data Merchant |
          <a href="{{ route('administrator.create') }}" class="btn btn-success">
            <span class="btn-label">
              <i class="material-icons">add</i>
            </span>
            Merchant
          </a>
        </h3>
        
        <br>
        <div class="row">
          <div class="col-md-9">
            <div class="card">
              <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title ">Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Nama Merchant
                      </th>
                      <th colspan="2">
                        Aksi
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($merchants as $item)
                      <tr>
                        <td>
                          {{$item->nama}}
                        </td>
                        <td>
                          Ubah
                        </td>
                        <td>
                          Hapus
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
					<div class="col-md-3 col-sm-12">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="fa fa-building"></i>
                </div>
                <p class="card-category">Jumlah Merchant</p>
                <h3 class="card-title">+{{$merchantcount}}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  @if (isset($merchantlast))
                    <i class="material-icons">update</i> Pendaftaran Terakhir {{$merchantlast->created_at}}
                  @else
                    Belum ada Pendaftaran
                  @endif
                </div>
              </div>
            </div>
          </div>		  
        </div>
      </div>
    </div>
@endsection