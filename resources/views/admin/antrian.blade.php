@extends('admin.layouts')

@section('title', 'Index -')

@section('indexinactive', 'active')

@section('judul')
<a class="navbar-brand" href="/administrator"><i class="material-icons">
    keyboard_arrow_left
    </i> Antrian | Dashboard</a>
@endsection

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-icon card-header-rose">
            <div class="card-icon">
              <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title ">Data Pegantre</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No Antrian
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Status
                  </th>
                </thead>
                <tbody>
                  @foreach ($submerchants as $submerchant)
                  <tr>
                    <td>
                      {{ $submerchant->noantre }}
                    </td>
                    <td>
                      {{ $submerchant->iduser }}
                    </td>
                    <td>
                      @if ($submerchant->status == '0')
                        <button class="btn btn-danger">Sedang Antri</button>
                      @else
                        <button class="btn btn-success">Selesai Antri</button> 
                      @endif
                    </td>
                  </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-chart">
                  <div class="card-header card-header-rose" data-header-animation="true">
                    <div class="ct-chart" id="websiteViewsChart"></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Pencapaian Data Bulanan</h4>
                    {{-- <p class="card-category">Last Campaign Performance</p> --}}
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> campaign sent 2 days ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card card-chart">
                  <div class="card-header card-header-success" data-header-animation="true">
                    <div class="ct-chart" id="dailySalesChart"></div>
                  </div>
                  <div class="card-body">
                    <div class="card-actions">
                      <button type="button" class="btn btn-danger btn-link fix-broken-card">
                        <i class="material-icons">build</i> Fix Header!
                      </button>
                      <button type="button" class="btn btn-info btn-link" rel="tooltip" data-placement="bottom" title="Refresh">
                        <i class="material-icons">refresh</i>
                      </button>
                      <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="Change Date">
                        <i class="material-icons">edit</i>
                      </button>
                    </div>
                    <h4 class="card-title">Pencapaian Data Harian</h4>
                    {{-- <p class="card-category">
                      <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p> --}}
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">access_time</i> updated 4 minutes ago
                    </div>
                  </div>
                </div>
              </div>    
          </div>
        </div>
      </div>
  </div>
</div>
@endsection