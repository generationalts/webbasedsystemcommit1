<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset("/img/logo.jpg") }}" rel="icon">
    <link href="{{ asset("/img/logo.jpg") }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{asset ("css/loginr.css") }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="icon">
            <img src="{{ asset("img/logo.jpg") }}" alt="">
        </div>
        <div class="text-center mt-4 name"> G.T.S </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

            <form method="POST" class="p-3 mt-3" action="{{ route('login') }}">
                @csrf
            <div class="input-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-field d-flex align-items-center">
                 <span class="fas fa-key"></span>
                 <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             </div>
              <button class="btn mt-3">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="{{ route('password.request') }}">Forgot password?</a> or <a href="{{ route('register') }}">Sign up</a> or <a href="/">Go back</a>
        </div>


    </div>
</body>
</html>
