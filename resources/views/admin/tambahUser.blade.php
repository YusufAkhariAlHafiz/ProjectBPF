@extends('templateAdmin')
@section('title', 'Tambah User')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header flex-wrap">
            
        </div>
        <!-- first row starts here -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Pendaftaran Akun </h4>
                        <p class="card-description">Masukkan data yang sesuai dalam pembuatan akun ..</p>
                        <form class="forms-sample" method="post" action="<?= ('/admin/store')?>">
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Akun<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama" id="exampleInputUsername2" placeholder="Nama Akun" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" id="exampleInputPassword2" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Konfirmasi Password<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="pass1" id="exampleInputConfirmPassword2" placeholder="Konfirmasi Password" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tipe Akun<text class="card-description text-danger">*</text></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="role">
                                            <option value="dosen">Dosen</option>
                                            <option value="ukm">UKM / HIMA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2"> Kirim </button>
                            <button class="btn btn-light">Reset </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection