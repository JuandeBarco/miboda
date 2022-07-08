@extends('layouts.welcome')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Save the date<br><span>22 ♥ 10 ♥ 2022</span></h1>
      <p class="mb-4 pb-0" id="demo"></p>
      <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
      @if ($boleto)
        {{-- <button class="btn about-btn scrollto" id="">Confirma tu asistencia</button> --}}
        <h2 class="text-light">¡Bienvenido al mejor día de nuestras vidas!</h2>
      @else
        <button class="btn about-btn scrollto" data-bs-toggle="modal" data-bs-target="#modal_codigo">Ingresa tu código de invitado</button>
      @endif
    </div>
  </section><!-- End Hero Section -->
<!-- Modal -->
<div class="modal fade" id="modal_codigo" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Código de Invitado</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <form action="{{ route('welcome.validar_codigo') }}" method="POST" id="form_codigo" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingresa tu código de invitado">
            </div>
            <button type="submit" class="btn btn-primary mt-3" id="btn_form_codigo_submit">Corroborar código</button>
          </form>
          <div class="alert alert-danger mt-3" role="alert" id="alert_error" hidden>El código ingresado no es valido, corrobora y escribelo de nuevo. Si es necesario, contacta con alguno de los novios.</div>
        </div>
      </div>
    </div>
  </div>
</div>

{{--   @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
      
  @endif --}}

@if ($boleto)

  <main id="main">

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>¡Vivan los novios!</h2>
          <p>Nos gusta pensar que desde el principio de los tiempos nuestras particulas viajaron por el tiempo y el espacio hasta este momento, que somos el remanente de las estrellas que colapsaron para dar los cimientos de estos dos seres que, desde siempre, buscaban su lugar en el universo... hasta que se encontraron, nuevamente</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ url('img/welcome/boda2.jpg') }}" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Casándonos</a></h3>
                <p>(Crestomatía)</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Lugares</h2>
          <p>¡Colima los espera con un (muy) calido abrazo!</p>
        </div>

      <div class="row g-0">
        <div class="col-lg-6 venue-info">
          <div class="row justify-content-center">
            <div class="col-11 col-lg-8 position-relative">
              <h3>Parroquia Preciosa Sangre de Cristo</h3>
              <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 venue-map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4479.651920379523!2d-103.7248153179251!3d19.242176771453526!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb7f88ac435fb8d38!2sParroquia%20Preciosa%20Sangre%20de%20Cristo!5e0!3m2!1ses!2smx!4v1652932349566!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>

        <div class="row g-0 mt-4">
          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8 position-relative">
                <h3>Salón de Eventos "El Velero"</h3>
                <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 venue-map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d665.7854691357902!2d-103.71080890876165!3d19.27143227990784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255ad07f758495%3A0x5c7462582d0d548d!2sJardin%20de%20Fiestas%20El%20Velero!5e0!3m2!1ses!2smx!4v1642748657104!5m2!1ses!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>

    </section><!-- End Venue Section -->

        <!-- ======= Schedule Section ======= -->
        <section id="schedule" class="section-with-bg">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Itinerario</h2>
              <p>Pa' que no se pierdan de nada</p>
            </div>
    {{-- 
            <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
              <li class="nav-item">
                <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">22 / 10 / 2022</a>
              </li>
            </ul>
    
            <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
              necessitatibus voluptatem quis labore perspiciatis quia.</h3> --}}
    
            <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
    
              <!-- Schdule Day 1 -->
              <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
    
                <div class="row schedule-item">
                  <div class="col-md-2"><time>07:00 PM</time></div>
                  <div class="col-md-10">
                    <h4>Celebración <span>(Templo de María Auxiliadora)</span></h4>
                    <p>Será todo un honor para nosotros que nos acompañes en el momento en que comencemos nuestra familia</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>08:30 PM</time></div>
                  <div class="col-md-10">
                    <h4>Recepción <span>(Salón de eventos El Velero)</span></h4>
                    <p>La recepción al banquete comenzará a las 08:30</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>09:00 PM</time></div>
                  <div class="col-md-10">
                    <h4>Pachangón <span></span></h4>
                    <p>Let the party begins!</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>02:00 AM</time></div>
                  <div class="col-md-10">
                    <h4>Fin de la fiesta <span></span></h4>
                    <p>¡Estaremos eternamente agradecidos por habernos acompañado en nuestro día!</p>
                  </div>
                </div>
    
              </div>
              <!-- End Schdule Day 1 -->
    
            </div>
    
          </div>
    
        </section><!-- End Schedule Section -->

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <div class="text-center mb-3">
              <h2>Código de vestimenta</h2>
              <img src="{{ url('img/welcome/dresscode_clear.png') }}" class="img-fluid" width="100vh">
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <div class="text-center">
                  <h1 class="text-dark">Formal</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-center mb-3">
              <h2>Protocolo de sanidad</h2>
              <img src="{{ url('img/welcome/medidas_sanidad_clear.png') }}" class="img-fluid" width="80vh">
            </div>
            <div class="card">
              <div class="card-body">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent">1. Portar el cubrebocas en todo momento posible</li>
                  <li class="list-group-item bg-transparent">2. Atender las indicaciones del o la hostest en la recepción</li>
                  <li class="list-group-item bg-transparent">3. Continuar con las medidas que llevamos desde hace tiempo</li>
                </ul>
              </div>
            </div>
            <p>Entendemos que la pandemia ha traido consigo estragos inimaginables; si por algún mótivo no te sientes cómoda o cómodo al asistir al banquete o a la celebración, o presentas sintomas de COVID, agradeceriamos que nos avisaras con la mayor anticipación posible.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

        <!-- ======= Supporters Section ======= -->
        <section id="supporters" class="section-with-bg">

          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Mesa de regalos</h2>
              <p>No necesariamente debe ser algo de aquí, pero si quieres ideas...</p>
            </div>
    
            <div class="row clearfix justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    
              <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="https://www.amazon.com.mx/wedding/isis-siomara-garcía-alcalá-juan-de-dios-barajas-corona-colima-october-2022/registry/32RDNLD4Z1X3" target="_blank" rel="noopener noreferrer">  
                  <div class="supporter-logo">
                    <img src="{{ url('img/welcome/amazon.png') }}" class="img-fluid" alt="">
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-4 col-xs-6">
                <a href="http://mesaderegalos.liverpool.com.mx/milistaderegalos/50765762" target="_blank" rel="noopener noreferrer">  
                  <div class="supporter-logo">
                    <img src="{{ url('img/welcome/liverpool.png') }}" class="img-fluid" alt="">
                  </div>
                </a>
              </div>
    
            </div>
    
          </div>
    
        </section><!-- End Sponsors Section -->

    <!-- ======= Hotels Section ======= -->
    <section id="hotels" class="section-with-bg">

        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Hoteles Recomendados</h2>
            <p>Los siguientes hoteles son una buena opción de hospedaje, si lo necesitas.</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-4 col-md-6">
              <div class="hotel">
                <div class="hotel-img">
                  <img src="{{ url('img/welcome/hotel3.jpg') }}" alt="Hotel 3" class="img-fluid">
                </div>
                <h3><a href="https://goo.gl/maps/UzstbzVzK9kLZmsr9" target="_blank">Hotel María Isabel</a></h3>
                <div class="stars">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                </div>
                <p>4.6 km del evento (aprox. 6 minutos)</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="hotel">
                  <div class="hotel-img">
                    <img src="{{ url('img/welcome/hotel2.jpg') }}" alt="Hotel 2" class="img-fluid">
                  </div>
                  <h3><a href="https://goo.gl/maps/L2Qt4G1vYvoSxyD1A" target="_blank">Hotel Misión Colima</a></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>3.3 km del evento (aprox. 4 minutos)</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="hotel">
                  <div class="hotel-img">
                    <img src="{{ url('img/welcome/hotel1.jpg') }}" alt="Hotel 1" class="img-fluid">
                  </div>
                  <h3><a href="https://goo.gl/maps/yDTXZG7DFoXsnQ9v5" target="_blank">Hotel Consierge Plaza la Villa</a></h3>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>5.0 km del evento (aprox. 8 minutos)</p>
                </div>
            </div>
  
          </div>
        </div>
  
      </section><!-- End Hotels Section -->

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Dudas Frecuentes</h2>
          <p>Cualquier otra duda referente a la boda, ¡contactanos!</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">¿Es necesario confirmar mi asistencia? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Si por cualquier motivo no puedes asistir a la fiesta, no te preocupes. La fiesta será para muy pocas personas, y te agradeceríamos muchisimo que nos confirmes tu asistencia (o inasistencia) lo antes posible a tráves del botón "Confirmar asistencia", que se encuentra en la parte superior de la página.
                        </p>
                    </div>
                  </li>

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">¿Cuál es mi código de invitado?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Es un código de cinco digitos aleatorios que te compartimos en la invitación digital de la boda. Si tienes problemas identificandolo, puedes contactar a cualquiera de los novios, y con gusto te ayudaremos.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">¿Por qué necesito registrar mi correo para confirmar mi asistencia?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            Necesitamos tu correo para que el sistema (hecho por el novio) pueda enviarte tus boletos. Opcionalemente puedes compartirnos tu número de celular para notificarte cualquier cosa por medio de SMS. No te preocupes, no compartiremos ningún dato tuyo con nadie.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Ya confirmé mi asistencia, ¿ahora qué?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            ¡Eso es todo! Te enviaremos los boletos por medio del correo que registraste en cuanto confirmes tu asistencia, y te los reenviaremos el día de la boda también, ¡no más preocupaciones!
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">¿El código de invitado es personal?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            No necesariamente; es probable que el código que te proporcionamos englobe a varios invitados. De ser el caso, deberán confirmar la asistencia de cada uno para generarle su boleto. Ojo, los boletos si son personales, y serán enviados al correo que se registró en el proceso de confirmación.
                        </p>
                    </div>
                </li>

            </ul>

          </div>
        </div>

      </div>

    </section><!-- End  F.A.Q Section -->

    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Confirma tu asistencia</h2>
          <p>Es muy importante para nosotros que puedas confirmar tu asistencia, aun si la respuesta es negativa. Queremos que esta boda sea muy especial, y contar con tu participación es muy importante para nosotros</p>
        </div>

        <div class="row justify-content-center">
        @foreach ($boletos_grupo as $item)
          <div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Boleto personal</h5>
                <p class="card-price text-center" style="font-size: 20px">{{ $item->nombre_completo }}<p>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Confirmar asistencia</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>

      <!-- Modal Order Form -->
      <div id="buy-ticket-modal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buy Tickets</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                </div>
                <div class="form-group mt-3">
                  <select id="ticket-type" name="ticket-type" class="form-select">
                    <option value="">-- Select Your Ticket Type --</option>
                    <option value="standard-access">Standard Access</option>
                    <option value="pro-access">Pro Access</option>
                    <option value="premium-access">Premium Access</option>
                  </select>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn">Buy Now</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

    </section><!-- End Buy Ticket Section -->

  </main><!-- End #main -->
@endif
@endsection

@section('javascript')

<script>
    $(document).ready(function(){

        $('#form_codigo').on('submit', function(e){
            e.preventDefault();
            $('#btn-codigo').attr('disabled', true);
            $('#btn_form_codigo_submit').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Validando...');
            var codigo = $('#codigo').val();
            var url = "{{ route('welcome.validar_codigo') }}";

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: url,
                data: {codigo: codigo},
                success: function(data){
                  console.log(data);
                  
                  $('#btn-codigo').attr('disabled', false);
                  $('#btn_form_codigo_submit').html('Validar código');

                  if (data.status == 'error') {
                    $('#alert_error').attr('hidden', false);
                  } else {
                    $('#alert_error').attr('hidden', true);
                    $('#modal_codigo').modal('hide');
                    Swal.fire({
                      title: 'Código válido',
                      text: 'El código ingresado es válido, presiona el botón "Aceptar" para continuar a la página',
                      type: 'success',
                      confirmButtonText: 'Aceptar',
                      allowOutsideClick: false
                    }).then((result) => {
                      if (result.value) {
                        let url = "{{ route('welcome.invitado', ':codigo') }}";
                        url = url.replace(':codigo', codigo);
                        window.location.href = url;
                      }
                    })
                  }
                }
            });
        });

    });
</script>

@if (!$boleto)
  <script>
    $(document).ready(function(){
      $('#abtn_confirmar').click(function(){
        $('#modal_codigo').modal('show');
      });
    });
  </script>
@endif
    
@endsection