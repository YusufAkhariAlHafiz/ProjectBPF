@extends('templateAdmin')
@section('title', 'Pengajuan')
@section('content')

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
      <h3 class="page-title">Pengajuan Proposal Acara</h3>
    </div>
    <!-- first row starts here -->
    <div class="row">
      <div class="col-sm-12 stretch-card grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Proposal Acara</h4>
            <p class="card-description text-danger">Berikut adalah pengajuan proposal acara yang masuk ..
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
                  <tr>
                    <td>Dave</td>
                    <td>BEM</td>
                    <td>20 May 2017</td>
                    <td>
                      <label class="badge badge-danger">Ditolak</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal3">Info </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Dave</td>
                    <td>BEM</td>
                    <td>20 May 2017</td>
                    <td>
                      <label class="badge badge-success">Diterima</label>
                    </td>
                    <td>
                      <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal2">Info </button>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

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
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalTolak"> Tolak </button>
          <button type="button" class="btn btn-success">Terima</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td>Acara 2</td>
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
                    <label class="badge badge-success">Diterima</label>
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
          <button type="button" class="btn btn-light" data-bs-dismiss="modal"> Selesai </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <td>Acara 3</td>
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
                    <label class="badge badge-danger">Ditolak</label>
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
                <tr>
                  <td>
                    Alasan Penolakan
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
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer mx-auto">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal"> Selesai </button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalTolak" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalTolak">Alasan Penolakan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="">
            <textarea name="" id="" cols="52" rows="10"></textarea>
          </form>
        </div>
        <div class="modal-footer mx-auto">
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModalTolak"> Tolak </button>
          <button class="btn btn-outline-dark " data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

@endsection