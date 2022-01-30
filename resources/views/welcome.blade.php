@extends('layouts.welcome')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Save the date<br><span>22 ♥ 10 ♥ 2022</span></h1>
      <p class="mb-4 pb-0" id="demo"></p>
      <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
      <button class="btn about-btn scrollto" id="btn_confirmar_asistencia">Confirma tu asistencia</button>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-12">
            <h2>Acerca del bodorrio</h2>
            <p>Seamos honestos, las fiestas no se le dan ni a la novia, ni al novio; ser millenials tampoco ayuda, una super-mega boda no va con nuestro estilo. Si a eso le sumamos una impertinente pandemia, suena como que no es la mejor idea hacer una fiesta... Afortunadamente (para ambos), se encontró un perfecto balance: una boda sencilla y pequeña, pero muy especial.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Speakers Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>¡Vivan los novios!</h2>
          <p>(Si los reconce, por favor, denuncielos)</p>
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

    <!-- ======= Schedule Section ======= -->
    <section id="schedule" class="section-with-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Itinerario</h2>
          <p>Pa' que no se pierdan de nada</p>
        </div>

        <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">22 / 10 / 2022</a>
          </li>
        </ul>

        <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
          necessitatibus voluptatem quis labore perspiciatis quia.</h3>

        <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>07:00 PM</time></div>
              <div class="col-md-10">
                {{-- <h4>Keynote <span>Brenden Legros</span></h4> --}}
                <h4>Celebración</h4>
                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

        </div>

      </div>

    </section><!-- End Schedule Section -->

    <!-- ======= Venue Section ======= -->
    <section id="venue">

      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          <h2>Locaciones</h2>
          <p>¡Colima los espera con un (muy) calido abrazo!</p>
        </div>

      <div class="row g-0">
        <div class="col-lg-6 venue-info">
          <div class="row justify-content-center">
            <div class="col-11 col-lg-8 position-relative">
              <h3>Santuario de María Auxiliadora</h3>
              <p>Iste nobis eum sapiente sunt enim dolores labore accusantium autem. Cumque beatae ipsam. Est quae sit qui voluptatem corporis velit. Qui maxime accusamus possimus. Consequatur sequi et ea suscipit enim nesciunt quia velit.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 venue-map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0" allowfullscreen></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1370.5933156429908!2d-103.72679983410482!3d19.239431502342914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84255aaadeae1e09%3A0x88bbdb2f00751a0!2sIglesia%20de%20Mar%C3%ADa%20Auxiliadora!5e0!3m2!1ses!2smx!4v1642747892658!5m2!1ses!2smx" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

    <!-- ======= Hotels Section ======= -->
    <section id="hotels" class="section-with-bg">

        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <h2>Hoteles Recomendados</h2>
            <p>Los siguientes hoteles son una buena opción de hospedaje, si lo necesitas. (Páguennos por la promición)</p>
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

    <!-- ======= Buy Ticket Section ======= -->
    <section id="buy-tickets" class="section-with-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Buy Tickets</h2>
          <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                <h6 class="card-price text-center">$150</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                <h6 class="card-price text-center">$250</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                  <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="pro-access">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                <h6 class="card-price text-center">$350</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                  <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                </ul>
                <hr>
                <div class="text-center">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="premium-access">Buy Now</button>
                </div>

              </div>
            </div>
          </div>
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
@endsection

@section('javascript')

<script>
    $(document).ready(function(){
        
        $('#btn_confirmar_asistencia').click(function(){
            Swal.fire({
                title: 'Ingresa tu código de invitado',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Validar',
                cancelButtonText: 'Cancelar',
                showLoaderOnConfirm: true,
                footer: '<small>¿Tienes dudas? Consulta el apartado "Dudas Frecuentes" en el menú</small>',
                preConfirm: (login) => {
                    return fetch(`//api.github.com/users/${login}`)
                    .then(response => {
                        if (!response.ok) {
                        throw new Error(response.statusText)
                        }
                        return response.json()
                    })
                    .catch(error => {
                        Swal.showValidationMessage(
                        `Request failed: ${error}`
                        )
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                    title: `${result.value.login}'s avatar`,
                    imageUrl: result.value.avatar_url
                    })
                }
            });
        });

    });
</script>
    
@endsection