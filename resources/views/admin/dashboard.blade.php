@extends('templateAdmin')
@section('title', 'Admin')
@section('content')

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
    </div>
    <!-- first row starts here -->
    <div class="row">
      <div class="col-sm-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Proposal Acara</h4>
            <p class="card-description text-danger">Berikut adalah proposal acara yang belum dikonfirmasi ..
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama Acara</th>
                    <th>Pemilik Acara</th>
                    <th>Tanggal Diajukan</th>
                    <th>Status</th>
                    <th>Detail Acara</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jacob</td>
                    <td>ITSA</td>
                    <td>12 May 2017</td>
                    <td>
                      <label class="badge badge-info">Pending</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Messsy</td>
                    <td>HIMASISTIFO</td>
                    <td>15 May 2017</td>
                    <td>
                      <label class="badge badge-info">Pending</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info </button>
                    </td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>HIMAKOM</td>
                    <td>14 May 2017</td>
                    <td>
                      <label class="badge badge-info">Pending</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Peter</td>
                    <td>BEM</td>
                    <td>16 May 2017</td>
                    <td>
                      <label class="badge badge-info">Pending</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Dave</td>
                    <td>BEM</td>
                    <td>20 May 2017</td>
                    <td>
                      <label class="badge badge-info">Pending</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info </button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <a class="text-black font-13 d-block pt-4 pb-2 pb-lg-0 font-weight-bold" href="pengajuan">Lainnya..</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Total Proposal yang telah Diajukan</h4>
            <p class="card-description">Berikut adalah total proposal acara telah diajukan ..
            </p>
            <div class="d-flex border-bottom pt-3 mb-4 pb-2">
              <div class="hexagon">
                <div class="hex-mid hexagon-info">
                  <i class="mdi mdi-check"></i>
                </div>
              </div>
              <div class="ps-4">
                <h4 class="font-weight-bold text-info mb-0"> 15 Pengajuan </h4>
                <h6 class="text-muted">Pending</h6>
              </div>
            </div>

            <div class="d-flex border-bottom mb-4 pb-2">
              <div class="hexagon">
                <div class="hex-mid hexagon-danger">
                  <i class="mdi mdi-close"></i>
                </div>
              </div>
              <div class="ps-4">
                <h4 class="font-weight-bold text-danger mb-0">34 Pengajuan</h4>
                <h6 class="text-muted">Ditolak</h6>
              </div>
            </div>

            <div class="d-flex">
              <div class="hexagon">
                <div class="hex-mid hexagon-success">
                  <i class="mdi mdi-check-all"></i>
                </div>
              </div>
              <div class="ps-4">
                <h4 class="font-weight-bold text-success mb-0"> 35 Pengajuan </h4>
                <h6 class="text-muted">Selesai</h6>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-sm-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body d-flex flex-wrap justify-content-between">
            <div>
              <h4 class="font-weight-semibold mb-1 text-black"> Pengajuan Bulan Ini </h4>
            </div>
            <h3 class="text-success font-weight-bold">12 Pengajuan</h3>
            <div class="doughnut-wrapper w-50">
              <canvas id="doughnutChart3" width="100" height="100"></canvas>
            </div>
            <div id="doughnut-chart-legend2" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 stretch-card grid-margin">
        <div class="card">
          <div class="card-body d-flex flex-wrap justify-content-between">
            <div>
              <h4 class="font-weight-semibold mb-1 text-black"> Pengajuan Tahun Ini </h4>
            </div>
            <h3 class="text-success font-weight-bold">12 Pengajuan</h3>
            <div class="doughnut-wrapper w-50">
              <canvas id="doughnutChart2" width="100" height="100"></canvas>
            </div>
            <div id="doughnut-chart-legend3" class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left"></div>
          </div>
        </div>
      </div>

    </div>


    <!-- chart row starts here -->
    <div class="row">
      <div class="col-sm-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <div class="card-title"> Pengajuan Acara 2023
              </div>
              <div class="d-flex text-muted font-20">
                <i class="mdi mdi-printer mouse-pointer"></i>
                <i class="mdi mdi-help-circle-outline ms-2 mouse-pointer"></i>
              </div>
            </div>

            <h3 class="font-weight-bold mb-3"> 185 Pengajuan Acara
            </h3>
            <div class="line-chart-wrapper">
              <canvas id="linechart" height="80"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pengajuan Proposal Acara</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>
                      Nama Acara
                    </td>
                    <td>Acara 1</td>
                  </tr>
                  <tr>
                    <td>
                      Pemilik Acara
                    </td>
                    <td>ITSA</td>
                  </tr>
                  <tr>
                    <td>
                      Tanggal Diajukan
                    </td>
                    <td>12 May 2017</td>
                  </tr>
                  <tr>
                    <td>
                      Status
                    </td>
                    <td>
                      <label class="badge badge-info">Pending</label>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Deskripsi Acara
                    </td>
                    <td>
                      <h5> <small class="text-muted word-wrap">
                          pariatur exercitationem officiis suscipit, architecto <br>
                          odit illo quaerat. Debitis similique id ratione quo <br>
                          rerum facilis cupiditate! Esse debitis, reprehenderit <br>
                          pariatur qui itaque, adipisci distinctio quas at unde <br>
                          accusamus dolore reiciendis iure eum? </small> </h5>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Proposal
                    </td>
                    <td>
                      <button class="btn btn-warning">Proposal</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer mx-auto">
            <button type="button" class="btn btn-danger"> Tolak </button>
            <button type="button" class="btn btn-success">Terima</button>
          </div>
        </div>
      </div>
    </div>
  <!-- content-wrapper ends -->

@endsection