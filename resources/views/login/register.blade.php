@extends('login.html')
@section('isi')
    <form class="form-horizontal" action="{{ route('register') }}" method="POST">
        @csrf


        @if (session()->has('loginError'))
            <div class="alert text-center alert-danger" role="alert">
                {{ session('loginError') }}
            </div>
        @endif
        @error('email')
            <div class="alert text-center alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        @error('password')
            <div class="alert text-center alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group">
            <label class="col-sm-4 control-label" for="login">Username</label>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="text" id="login" name="name" id="name" class="form-control" autofocus value="{{ old('name') }}" required placeholder="Masukkan Username">
                    <div class="input-group-addon">

                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="login">Email</label>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" required placeholder="Masukkan Email">
                    <div class="input-group-addon">
                        <img style="width:15px"
                            src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-256.png"
                            alt="Google Logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="password">Password</label>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control" required placeholder="Masukkan Password">
                    <div class="input-group-addon" data-action="see-password" data-toggle="password">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-4">
                <input type="submit" class="btn" value="LOGIN">
            </div>
        </div>
    </form>
    @endsection