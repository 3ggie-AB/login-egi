@extends('login.html')
@section('isi')
    <form class="form-horizontal" action="{{ route('login') }}" method="POST">
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
            <label class="col-sm-4 control-label" for="login">Email</label>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="text" id="login" name="email" value="{{ old('email') }}" class="form-control" required placeholder="Ketik Email">
                    <div class="input-group-addon">
                        <img style="width:15px" src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-256.png" alt="Google Logo">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="password">Password</label>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="password" id="password" name="password" required class="form-control" placeholder="Ketik Password">
                    <div class="input-group-addon" data-action="see-password" data-toggle="password">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-4">
                <input type="checkbox" id="sample">
                <label for="sample" class="form-checkbox">Tetap Login</label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-4">
                <input type="submit" class="btn" value="LOGIN">
            </div>
        </div>
    </form> 
@endsection