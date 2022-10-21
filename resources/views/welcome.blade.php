@extends('layouts.welcome')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0" style="font-family: 'Sacramento', cursive;">Save the date<br><span>22 ♥ 10 ♥ 2022</span></h1>
      <p class="mb-4 pb-0" id="demo"></p>
      <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
      @if ($boleto)
        {{-- <button class="btn about-btn scrollto" id="">Confirma tu asistencia</button> --}}
        <h2 class="text-light">¡Bienvenido(a) al mejor día de nuestras vidas!</h2>
        <p><small class="text-light">👇 Desliza hacia abajo 👇</small></p>
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
          <div class="alert alert-danger mt-3" role="alert" id="alert_error" hidden>El código ingresado no es válido, por favor corrobora y escríbelo de nuevo. Si es necesario, contacta con alguno de los novios.</div>
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
          <p>Nos gusta pensar que desde el principio de los tiempos nuestras partículas viajaron por el tiempo y el espacio hasta este momento, que somos el remanente de las estrellas que colapsaron para dar los cimientos de estos dos seres que, desde siempre, buscaban su lugar en el universo... hasta que se encontraron, nuevamente.</p> 
          <p class="mt-3">Hay momentos en la vida que son especiales por si solos, y compartirlos con las personas que quieres los convierte en momentos inolvidables. Por ello, es un honor para nosotros invitarte a la unión de estas dos almas en sagrado matrimonio el día 22 de Octubre a las 07:00pm, en la parroquia “Preciosa Sangre de Cristo”. Posteriormente, llevaremos a cabo una pequeña e íntima celebración en el salón de eventos “El Velero”, en compañía de aquellas personas que le agregan vida a nuestra existencia, como lo eres tú ❤ .</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ url('img/welcome/boda2.jpg') }}" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Casándonos</a></h3>
                <p>Nuestra primer boda en kermés (2019)</p>
                <div class="social text-light">
                  (Crestomatía)
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
          <p>¡Colima los espera con un (muy) cálido abrazo!</p>
        </div>

      <div class="row g-0">
        <div class="col-lg-6 venue-info">
          <div class="row justify-content-center">
            <div class="col-11 col-lg-8 position-relative">
              <h3>Parroquia "Preciosa Sangre de Cristo"</h3>
              <p>Domiclio: Filomeno Medina 124. Colonia: Centro, Colima, Col.</p>
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
                <p>Tercer Anillo Periférico 69, Colonia: Residencial Esmeralda, Colima, Col.</p>
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
                    <h4>Boda <span>(Parroquía "Preciosa Sangre de Cristo")</span></h4>
                    <p>Será todo un honor para nosotros que nos acompañes en el momento en que comencemos nuestra familia</p>
                  </div>
                </div>
                <div class="row schedule-item">
                  <div class="col-md-2"><time>08:30 PM</time></div>
                  <div class="col-md-10">
                    <h4>Celebración <span>(Salón de eventos "El Velero")</span></h4>
                    <p>La recepción al banquete comenzará a las 08:30pm</p>
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
              <h2 style="font-family: 'Sacramento', cursive;">Código de vestimenta</h2>
              <img src="{{ url('img/welcome/dresscode_clear.png') }}" class="img-fluid" width="100vh">
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <div class="text-center">
                  <h1 class="text-dark">Formal</h1><small class="text-muted">(Evitar vestido color rojo)</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="text-center mb-3">
              <h2 style="font-family: 'Sacramento', cursive;">Protocolo de sanidad</h2>
              <img src="{{ url('img/welcome/medidas_sanidad_clear.png') }}" class="img-fluid" width="80vh">
            </div>
            <div class="card">
              <div class="card-body">
                <ul class="list-group list-group-flush bg-transparent">
                  <li class="list-group-item bg-transparent">1. Portar el cubrebocas en todo momento posible</li>
                  <li class="list-group-item bg-transparent">2. Atender las indicaciones de el o la hostest en la recepción</li>
                  <li class="list-group-item bg-transparent">3. Continuar con las medidas que llevamos desde hace tiempo</li>
                </ul>
              </div>
            </div>
            <p>Entendemos que la pandemia ha traído consigo estragos inimaginables; si por algún motivo no te sientes cómoda o cómodo al asistir a la ceremonia y/o a la celebración, presentas sintomas de COVID, entre otras posibles causas, agradeceríamos que nos avisaras con la mayor anticipación posible.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

        <!-- ======= Supporters Section ======= -->
        <section id="supporters" class="section-with-bg">

          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h2>Mesa de regalos</h2>
              <p>No es obligatorio llevar un regalo de alguna de nuestras mesas indicadas a continuación, estas son sugerencias en caso de que las necesites. Da click en cualquiera de los logos (Amazon y/o Liverpool) para ser redirigido.</p>
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
            <p>Si lo necesitas, ¡los siguientes hoteles son una excelente opción de hospedaje!</p>
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
                <p>2.3 km del templo (aprox. 3 minutos)</p>
                <p>4.6 km del casino (aprox. 6 minutos)</p>
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
                  <p>4.4 km del templo (aprox. 6 minutos)</p>
                  <p>3.3 km del casino (aprox. 4 minutos)</p>
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
                  <p>3.5 km del templo (aprox. 6 minutos)</p>
                  <p>5.0 km del casino (aprox. 8 minutos)</p>
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
          <p>Da click en las flechitas que acompañan a cada pregunta del lado izquierdo para desglosar la información, en caso de tener cualquier otra duda, ¡contáctanos! con mucho gusto la resolveremos</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-9">

            <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" href="#faq1" class="collapsed question">¿Es necesario confirmar mi asistencia? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Si, este primer paso es muy importante para nosotros. Si por cualquier motivo no puedes asistir a la celebración, ¡no te preocupes!, valoraremos mucho tu sinceridad y responsabilidad. La fiesta será para un grupo reducido (pero muy especial) de personas, por ello te solicitamos que nos confirmes tu asistencia o inasistencia a través del botón "Confirmar asistencia", que se encuentra en la parte superior de la página asi como al final de la misma, ahí podrás seleccionar la opción "¡Por supuesto!" para confirmar tu asistencia, o “No será posible” en caso de que no puedas acompañarnos; te agradeceríamos muchísimo si lo haces en cuanto te sea posible. De igual manera si ya confirmaste asistencia, y al final no puedes ir, por favor manda un mensaje notificando a cualquiera de los novios.
                        </p>
                    </div>
                  </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">¿Por qué necesito registrar mi correo para confirmar mi asistencia?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Necesitamos tu correo para que el sistema pueda enviarte tus boletos.De igual manera solicitaremos tu número de celular para notificarte cualquier cosa por medio de SMS. No te preocupes, no compartiremos ningún dato personal tuyo.
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Ya confirmé mi asistencia, ¿qué sigue?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                            ¡Eso es todo! Te enviaremos el o los boletos poco antes del día de la boda por medio del correo que registraste, y te los reenviaremos el día de la boda también, ¡no más preocupaciones!
                        </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">¿El código de invitado es personal?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          No necesariamente; es probable que el código que te proporcionamos englobe a varios invitados, esto lo podrás ver en el apartado de “Confirmar asistencia / inasistencia". En caso de que englobe a más de una persona, deberás confirmar a cada una de ellas. 
                        </p>
                    </div>
                </li>
                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">¿Los boletos son personales?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Si, los boletos <span class="fw-bold">son personales e intransferibles</span>. Cada persona tendrá su boleto de acceso a la fiesta y serán enviados al correo que se registró en el proceso de confirmación, por ello te pedimos que si alguno de los nombres está incompleto o es incorrecto, te pongas en contacto con alguno de los novios para hacer la corrección. El casino donde se llevará a cabo la fiesta tiene un espacio reducido, por lo que te pedimos no solicitar boletos adicionales, pues esto puede generar muchas complicaciones para los novios. Agradecemos mucho tu comprensión.
                        </p>
                    </div>
                </li>
                <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">¿Necesito llevar mi boleto físico?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          No, para ingresar a la fiesta podrás presentar tu boleto de manera digital desde tu celular, ¡así que no te preocupes! ☺ 
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
          <h2>Confirma tu asistencia / inasistencia</h2>
          <p>A continuación podrás confirmar tu asistencia o inasistencia. En caso de que tu código de invitado englobe a más de una persona, por favor confirma a cada una de ellas, presiona el botón “registrar respuesta" que se encuentra debajo de él o los nombres. ¡Gracias, esperamos verte pronto!</p>
        </div>

        <div class="row justify-content-center">
        @foreach ($boletos_grupo as $item)
          <div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Boleto personal</h5>
                <p class="card-price text-center" style="font-size: 20px">{{ $item->nombre_completo }}<p>
              @if ($item->estado_id == 1)
                <div class="text-center">
                  <button type="button" class="btn boton_asistencia" id="btn_disparador_modal_asistencia" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-id="{{ $item->id }}">Registrar respuesta</button>
                  <span id="badge_estatus" hidden></span>
                </div>
              @elseif ($item->estado_id == 2)
                <div class="text-center">
                  <span class="badge bg-success" id="badge_estatus">Asistencia confirmada</span>
                </div>
              @elseif ($item->estado_id == 4)
                <div class="text-center">
                  <span class="badge bg-secondary" id="badge_estatus">No asistirá</span>
                </div>
              @endif
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
              <h4 class="modal-title">Registro de asistencias</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form id="form_confirmacion" method="POST" action="{{ route('invitados.confirmar_asistencia') }}" enctype="multipart/form-data">
              @method('PUT')
              @csrf
                <p>¡Hola! En este espacio podrás confirmar tu asistencia a la fiesta. Tu respuesta, sea cual sea, nos es de muchísima ayuda para que todo sea perfecto ese día.</p>
                <div class="form-group mt-3">
                  <label for="ticket-type">Asistencia</label>
                  <select name="respuesta" id="respuesta" class="form-select">
                    <option value="" selected disabled>-- ¿Nos acompañarás en este día especial? --</option>
                    <option value="1">¡Por supuesto!</option>
                    <option value="2">No será posible</option>
                  </select>
                </div>
                <div id="div_confirmacion" hidden>
                  <p class="mt-5">¡GENIAL! Gracias por decidir acompañarnos, a continuación requerimos que nos compartas un correo electrónico y tu número de celular al que, un mes antes del tan esperado día, se enviarán los boletos</p>
                  <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ej. mi_correo@gmail.com">
                    @if (count($boletos_grupo) > 1)
                      <small class="form-text text-muted"> Te recomendamos usar el mismo correo para todos los invitados</small>
                    @endif
                  </div>
                  <div class="form-group mt-3">
                    <label for="phone">Número de celular</label>
                    <input type="number" class="form-control" name="celular" id="celular" placeholder="Ej. 3121234567">
                    <small class="form-text text-muted">No usaremos esta información para cambiarte a Movistar, lo prometemos</small>
                  </div>
                  <div class="form-group mt-3">
                    <input type="hidden" class="form-control" name="codigo_invitado" id="codigo_invitado" value="{{ $boleto->codigo }}" hidden>
                    <input type="hidden" class="form-control" name="persona" id="persona" hidden>
                  </div>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn" id="form_registrar_btn">Registrar respuestas</button>
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

      Swal.fire({
        title: '¡Hola!',
        text: 'Consulta tus boletos aquí',
        icon: 'info',
        confirmButtonText: '¡Entendido!'
      });

        $('#form_confirmacion').on('submit', function(e){
            e.preventDefault();
            $('#form_registrar_btn').attr('disabled', true);
            $('#form_registrar_btn').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Registrando...');
            var form = $(this);
            var formData = new FormData(form[0]);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(data){
                    console.log(data);
                    $('#form_registrar_btn').html('<i class="fa fa-check"></i> Registrado');
                    $('#form_registrar_btn').attr('disabled', false);
                    if(data.success){
                        $('#buy-ticket-modal').modal('hide');
                        $('#btn_disparador_modal_asistencia').attr('disabled', true);
                        $('#btn_disparador_modal_asistencia').attr('hidden', true);

                        /* if (data.estado == 2) {
                            $('#badge_estatus').attr('hidden', false);
                            $('#badge_estatus').attr('class', 'badge bg-success');
                            $('#badge_estatus').html('Asistencia confirmada');
                        } else {
                            $('#badge_estatus').attr('hidden', false);
                            $('#badge_estatus').attr('class', 'badge bg-secondary');
                            $('#badge_estatus').html('No asistirá');
                        } */
                        Swal.fire({
                            icon: 'success',
                            title: '¡Registro exitoso!',
                            text: '¡Muchas gracias por tu respuesta! La página se recargará en unos segundos.',
                            type: 'success',
                            timer: 3000,
                            showConfirmButton: false,
                            timerProgressBar: true,
                        }).then(function() {
                            window.location.reload();
                        });
                    }
                }
            });
        });

        $('.boton_asistencia').click(function(){
            var id = $(this).data('id');
            $('#persona').val(id);
        });

        $('#respuesta').change(function(){
          console.log($(this).val());
            if($(this).val() == 1){
                $('#div_confirmacion').attr('hidden', false);
                // make required fields required
                $('#correo').prop('required', true);
                $('#celular').prop('required', true);
            }else{
                $('#div_confirmacion').attr('hidden', true);
                // make required fields not required
                $('#correo').prop('required', false);
                $('#celular').prop('required', false);
            }
        });

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
                      icon: 'success',
                      title: 'Código válido',
                      text: 'El código ingresado es válido, en 5 segundos serás redireccionado a la página con la información de la boda.',
                      type: 'success',
                      allowOutsideClick: false,
                      timer: 5000,
                      showConfirmButton: false,
                      timerProgressBar: true,
                    }).then((result) => {
                        let url = "{{ route('welcome.invitado', ':codigo') }}";
                        url = url.replace(':codigo', codigo);
                        window.location.href = url;
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