@extends('templateAdmin')
@section('title', 'Admin - Edit User')
@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header flex-wrap">
            <div class="header-left">
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-outline-dark btn-light mb-2 mb-md-0 me-2"> Kembali </button>
                </a>
            </div>
        </div>
        <!-- first row starts here -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Perubahan Akun</h4>
                        <p class="card-description">Masukkan data yang akan dirubah pada akun ..</p>
                        @foreach($user as $p)
                        <form class="forms-sample" action="{{ route('updateUser', ['id' => $p->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $p->id }}" />
                            <input type="hidden" name="status" value="{{ $p->status }}" />
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Akun<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="exampleInputUsername2" name="nama" placeholder="Nama Akun" value="{{ $p->name }}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email" value="{{ $p->email }}" />
                                </div>
                            </div>
                            <!-- Tambahkan bagian ini untuk memastikan data yang diinput tidak berubah jika tidak diubah -->
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password Baru<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Konfirmasi Password Baru<text class="card-description text-danger">*</text></label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="exampleInputConfirmPassword2" name="password_confirmation" placeholder="Konfirmasi Password" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Tipe Akun<text class="card-description text-danger">*</text></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="role">   
                                            <option value="dosen" {{ $p->role == 'dosen' ? 'selected' : '' }}>Dosen</option>
                                            <option value="ukm" {{ $p->role == 'ukm' ? 'selected' : '' }}>UKM/HIMA</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2"> Ubah </button>
                            <button type="reset" class="btn btn-light"> Reset </button>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection