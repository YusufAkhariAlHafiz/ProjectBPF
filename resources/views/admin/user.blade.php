@extends('templateAdmin')
@section('title', 'Manajemen Akun')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
            <h3 class="page-title">Pengelolaan Akun BEM / UKM / HIMA</h3>
            <div class="header-left">
                <button class="btn btn-outline-dark btn-light mb-2 mb-md-0 me-2"> <a class="nav-link text-black" href="<?= ('Admin/user') ?>">Ekspor data Akun (PDF)</a> </button>
            </div>
        </div>
        <!-- first row starts here -->
        <div class="row">
            <div class="col-sm-12 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Akun Terdaftar</h4>
                        <p class="card-description text-danger">Berikut adalah akun dari bem / hima / ukm yang terdaftar ..
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Akun</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Detail Akun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @foreach($user as $p)
                                <tbody>
                                    <tr>
                                        <td>{{ $p->nama }}</td>

                                        <td>{{ $p->email }}</td>
                                        <td>
                                            <?php
                                            if ( $p->status == ("enable")) {
                                                echo '<label class="badge badge-info">Enable</label>';

                                            }else{
                                                echo '<label class="badge badge-danger">Disable</label>';
                                            }
                                            ?>
                                            
                                        </td>
                                        <td>
                                            <button class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Info </button>
                                        </td>
                                        <td>
                                            <a href="<?= ("Admin/editUser") ?>"><button class="btn btn-outline-primary bg-white bg-white mb-2 mb-md-0"> Edit Akun </button></a>
                                            <button class="btn btn-danger"> Disable Akun </button>
                                        </td>
                                    </tr>                                  
                                </tbody>
                                @endforeach
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
                    <h5 class="modal-title" id="exampleModalLabel">Detail Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        Nama Akun
                                    </td>
                                    <td>ITSA</td>
                                </tr>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>itsa@bem.pcr.ac.id</td>
                                </tr>
                                <tr>
                                    <td>
                                        Tanggal dibuat
                                    </td>
                                    <td>12 May 2000</td>
                                </tr>
                                <tr>
                                    <td>
                                        Status
                                    </td>
                                    <td>
                                        <label class="badge badge-info">Enable</label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Tutup </button>
                </div>
            </div>
        </div>
    </div>
    @endsection