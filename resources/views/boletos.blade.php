<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Se les casa la Isis y el Juande</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicons -->
  <!-- Favicon -->
  <link rel="icon" href="{{ url('favicon.ico') }}">
  <link href="{{ url('favicon.ico') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('css/welcome_style.css') }}" rel="stylesheet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="text-center">
                <h2 class="fw-bold">Boletos</h2>
                @if($boletos_grupo->count() == 1)
                    <p>Muestra tu boleto a la persona encargada de la recepción para ingresar a la fiesta</p>                    
                @else
                    <p>Se debe escanear el boleto correspondiente a cada invitado para poder ingresar a la fiesta</p>
                @endif
            </div>
        @foreach($boletos_grupo as $boleto)
            <div class="col-md-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-4">
                            <div class="visible-print text-center mt-3">
                                {!! QrCode::size(100)->generate($boleto->codigo); !!}
                                <p>{{ $boleto->codigo }}</p>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                            <h5 class="card-title">Boleto personal</h5>
                            <p class="card-text fw-bold">{{ $boleto->nombre_completo }}</p>
                            <p class="card-text"><small class="text-muted">Mesa: 1</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>

<style>
    .cursiva {
        font-family: 'Sacramento', cursive;
    }
</style>

<!-- jQuery -->
<script src="{{ url('js/jquery-3.6.0.min.js') }}"></script>

<!-- Vendor JS Files -->
<script src="{{ url('vendor/aos/aos.js') }}"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ url('vendor/php-email-form/validate.js') }}"></script>

<!-- SweetAlert2 -->
<script src="{{ url('vendor/sweetalert/dist/sweetalert2.all.min.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ url('js/welcome_main.js') }}"></script>

</body>

</html>