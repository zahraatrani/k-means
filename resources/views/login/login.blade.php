<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../landingpage/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../landingpage/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../landingpage/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="../landingpage/css/style.css">

  <title>Login</title>
  <style>
    body {
      background-color: white;
    }
  </style>
</head>

<body>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
        
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <h3>LOGIN<strong> ANUGRAH GROUP</strong></h3>
                <p class="mb-4">Clustering</p>
              </div>
              <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group first">
                  <label for="email">Username</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>

                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <div class="control__indicator"></div>
                  </label>
             
                </div>

                <button type="submit" class="btn text-white btn-block btn-primary">
                  {{ __('Login') }}
                </button>

               

              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="../landingpage/js/jquery-3.3.1.min.js"></script>
  <script src="../landingpage/js/popper.min.js"></script>
  <script src="../landingpage/js/bootstrap.min.js"></script>
  <script src="../landingpage/js/main.js"></script>
</body>

</html>