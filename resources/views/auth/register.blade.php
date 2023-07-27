
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        <form class="p-3 mt-3" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-field d-flex align-items-center">
                <input id="name" class="far fa-user form-control @error('name') is-invalid @enderror" placeholder="Name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-field d-flex align-items-center">
                <input id="contact" type="text" placeholder="Contact" class="form-control" name="contact" value="{{ old('contact') }}" required autocomplete="contact" autofocus>
                @error('contact')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            


            <div class="input-field d-flex align-items-center">
                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="input-field d-flex align-items-center">
                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-field d-flex align-items-center">
                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button class="btn mt-3">Register</button>
        </form>
        <div class="text-center fs-6">
            <a href="{{ route('password.request') }}">Forgot password?</a> or <a href="{{ route('login') }}">login</a> or <a href="/">Go back</a>
        </div>


    </div>


</body>
</html>
