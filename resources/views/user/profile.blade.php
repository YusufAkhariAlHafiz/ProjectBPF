@extends('templateUser')
@section('content')

    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{asset('template/user/img/curved-images/pcr.jpg')}}') ; background-position-y: 50%;  width:auto;">
        <span class="mask bg-gradient-info opacity-12"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n7 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xxl position-relative">
              <img src="{{asset('template/user/img/bruce-mars.jpg')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{session('user_nama')}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                {{ Str::ucfirst(session('user_role')) }}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 col-xl-12">
          <div class="card h-100 w-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                  <h4 class="mb-0">Detail Profil</h6>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama:</strong> &nbsp; {{session('user_nama')}} </li>
                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{session('user_email')}} </li>
              </ul>
            </div>
          </div>
        </div>


      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">

        </div>
      </footer>
    </div>
  </div>
@endsection
