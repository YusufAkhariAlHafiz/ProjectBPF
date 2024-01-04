@extends('templateAuth')
@section('content')
{{auth() -> user()}}
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="{{asset('template/auth/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
      </div>

      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Sistem Manajemen Kegiatan Politeknik Caltex Riau</p>
            </div>

            <div class="mb-4">
              @if($errors->any())
              <div class="col-12">
                @foreach(@errors -> all() as $error)
                <div class="alert alert-danger">
                  {{$error}}
                </div>
                @endforeach
              </div>
              @endif

              @if(session() -> has('error'))
              <div class="alert alert-danger">
                {{$error}}
              </div>
              @endif
            </div>

            <form class="forms-sample" method="post" action="{{route('login.post')}}">
              {{ csrf_field() }}
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="emal" class="form-control" value="" id="email" name="email">
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" value="" id="password" name="password">
              </div>

              <button type="submit" class="btn btn-primary btn-user btn-block"> Login </button>

              <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>

              <div class="social-login">
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>
                </a>
              </div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

@endsection