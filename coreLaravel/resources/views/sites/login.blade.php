<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>360 Subang - Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Programmer Negeri Satu Subang">
  <meta name="description" content="360 Subang adalah sebuah website yang memudahkan masyarakat dalam mencari tempat wisata yang tepat">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/pannellum.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/animations.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">

  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/pannellum.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</head>
<body>
  <div class="container">
    <div class="left">
      <div class="caption">
        <a href="{{ route('home') }}">
          <img src="{{ asset('img/logo.png') }}">
          <h1>360 Subang</h1>
        </a>
        <p>
          Memudahkan wisatawan untuk menikmati tempat wisata
          di daerah Kabupaten Subang
        </p>
      </div>
    </div>
    <div class="right">
      <div class="content">
        <h1><span>SI</span>GN IN</h1>
        <form action="">
          <input type="text" placeholder="Username">
          <input type="password" placeholder="Password">
          <button type="submit">
            Sign In
          </button>
        </form>

        <p>Belum Punya Akun ? <a href="{{ route('register') }}" class="link">Daftar</a></p>
        <div class="bottom-right">
          <img src="{{ asset('img/pattern_kepalasisingaan/sudut-pattern.svg') }}" alt="">
        </div>
      </div>
    </div>
  </div>
</body>
</html>
