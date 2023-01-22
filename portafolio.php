<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="portafolio de servicios de desarrollo web creado por Marcela Sevilla">
    <link rel="icon" href="img/logo.png">
    <title>Marcela Sevilla - Desarrolladora Web</title>
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/animate.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <?php
        session_start();
        if(!isset($_SESSION["user"])){
            header("location:index.php");
        }
    ?>
    <nav class="navbar navbar-expand-md sticky-top shadow-sm">
        <ul class="nav justify-content-center">
            <li class="logo me-5"><img src="img/logo.png" alt="Logo"></li>
            <li class="nav-item">
              <a class="nav-link" href="portafolio.php#home">
                  <img src="img/casa.png" alt="Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portafolio.php#about">
                <img src="img/about.png" alt="About">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portafolio.php#resume">
                    <img src="img/notebook.png" alt="Resume">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portafolio.php#portfolio">
                  <img src="img/portfolio.png" alt="Portafolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portafolio.php#services">
                    <img src="img/servicios.png" alt="Servicios">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="portafolio.php#contact">
                  <img src="img/correo.png" alt="Contactanos">Contact</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="dropdown-toggle nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/usuario.png" alt="Contactanos">
                        <span><?php echo $_SESSION["user"];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-center" href="salir.php">Cerrar Sessiónn</a></li>                        
                    </ul>
                </div>
            </li>
          </ul>
    </nav>
    <a id="home"></a>
    <header class="mt-5">
        <div class="container-lg">
            <div class="col-rigth">
                <h1 class="display-2">Hola Bienvenido!!</h1>
                <p class="fs-3 pe-2">
                  Soy Marcela Sevilla una estudiante de programación que ama 
                    <span class="word" id="hero-word"></span>
                </p>
                <div class="redes-sociales">
                    <a class="me-2" href="https://api.whatsapp.com/send?phone=573002203858&text=Hola"><img src="img/whatsapp.png" alt="Icono whatsapp"></a>
                    <a class="me-2" href="https://www.facebook.com"><img src="img/facebook.png" alt="Icono facebook"></a>
                    <a class="me-2" href="https://www.instagram.com"><img src="img/instagram.png" alt="Icono instagram"></a>
                    <a class="me-2" href="https://co.linkedin.com"><img src="img/linkedin.png" alt="Icono linkedin"></a>
                </div>
            </div>
            <div class="col-left">
                <img src="img/img_home_yo.png" alt="Foto Marcela Sevilla">
            </div>
        </div>
    </header>
    <main class="mt-4" data-aos="fade-up">
        <h2 id="about" class="titulo-2">ABOUT</h2>
        <p class="txt text-about fs-4">Técnica en programación de software con 2 años de experiencia. 
            Especializada en la programación con el lenguaje Java y desarrollo web 
            con HTML, CSS y JavaScript en la parte de Frontend.
        </p>
        <div class="container-md mt-4">
            <div class="colm-1">
                <img src="img/undraw_projections_re_ulc6.svg" alt="ilustración about">
            </div>
            <div class="colm-2 ps-3">
                <h3 style="color: #fff;">Desarrolladora Web Frontend / Backend</h3>
                <p class="fs-5">Soy Marcela Sevilla López una joven estudiante apasionada por la 
                    programación y el desarrollo de aplicaciones, sitios web y todo 
                    lo que conlleva el increible mundo de la programación.
                </p>
                <div class="cont-list">
                    <ul>
                        <li><img src="img/cheuron.png"><span class="ul-item">Nombre: </span>Marcela Sevilla Lopez</li>
                        <li><img src="img/cheuron.png"><span class="ul-item">Cumpleaños: </span>03 de Julio de 2004</li>
                        <li><img src="img/cheuron.png"><span class="ul-item">Edad: </span>18</li>
                    </ul>
                    <ul>
                        <li><img src="img/cheuron.png"><span class="ul-item">Email: </span>sevillamarcela514@gmail.com</li>
                        <li><img src="img/cheuron.png"><span class="ul-item">Teléfono: </span>+57 3002203858</li>
                        <li><img src="img/cheuron.png"><span class="ul-item">Ciudad: </span>Barranquilla - Colombia</li>
                    </ul>
                </div>
                <p class="fs-5">
                    Actualmente resido en la ciudad de Barranquilla y me dedico a estudiar 
                    programación, soy una persona aplicada y apasionada por el estudio, una 
                    de mis metas profesionales es poder aportar y contribuir de manera positiva 
                    a la sociedad a través de mí trabajo como desarrollada.
                </p>
            </div>
        </div>
    </main>
    <section class="cont-pro mg-pd" data-aos="fade-up">
        <article>
            <div id="recurs" class="container">
                <h2 class="titulo-2">FACTS</h2>
                    <div class="skill_bottom_content text-center mt-4">
                        <div class="skill_bottom_item">
                            <h4>Happy Clients</h4>
                            <img src="img/cara-feliz.png">
                            <p class="statistic-counter fs-5 fw-bold">232</p>
                        </div>
                        <div class="skill_bottom_item">
                            <h4>Projects</h4>
                            <img src="img/analitica.png">
                            <p class="statistic-counter fs-5 fw-bold">521</p>
                        </div>
                        <div class="skill_bottom_item">
                            <h4>Hours Of Support</h4>
                            <img src="img/soporte-tecnico.png">
                            <p class="statistic-counter fs-5 fw-bold">1463</p>
                        </div>
                        <div class="skill_bottom_item">
                            <h4>Awards</h4>
                            <img src="img/medalla.png">
                            <p class="statistic-counter fs-5 fw-bold">25</p>
                        </div>
                    </div>
            </div>
        </article>
        <article data-aos="fade-up">
            <h2 class="titulo-2 mt-5">SKILLS</h2>
            <div class="container-md skills mt-4">
                <div class="tamaño">
                    <div><p class="nom-barra">HTML</p><p class="text-end">90%</p></div>
                    <div class="teamskillbar clearfix" data-percent="90%">
                        <div class="teamskillbar-bar"></div>
                    </div>
                </div>
                <div class="tamaño">
                    <div><p class="nom-barra">CSS</p><p class="text-end">80%</p></div>
                    <div class="teamskillbar clearfix" data-percent="80%">
                        <div class="teamskillbar-bar"></div>
                    </div>
                </div>
                <div class="tamaño">
                    <div><p class="nom-barra">JAVASCRIPT</p><p class="text-end">60%</p></div>
                    <div class="teamskillbar clearfix" data-percent="60%">
                        <div class="teamskillbar-bar"></div>
                    </div>
                </div>
                <div class="tamaño">
                    <div><p class="nom-barra">WORDPRESS</p><p class="text-end">70%</p></div>
                    <div class="teamskillbar clearfix" data-percent="70%">
                        <div class="teamskillbar-bar"></div>
                    </div>
                </div>
                <div class="tamaño">
                    <div><p class="nom-barra">PYTHON</p><p class="text-end">80%</p></div>
                    <div class="teamskillbar clearfix" data-percent="80%">
                        <div class="teamskillbar-bar"></div>
                    </div>
                </div> 
                <div class="tamaño">
                    <div><p class="nom-barra">BOOTSTRAP</p><p class="text-end">60%</p></div>
                    <div class="teamskillbar clearfix" data-percent="60%">
                        <div class="teamskillbar-bar"></div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section id="resume" class="resume mg-pd" data-aos="fade-up">
        <h2 class="titulo-2">RESUME</h2>
        <p class="txt fs-4">
            En esta sección se encuentra infomación detallada acerca de mí perfil profesional 
            ubicada por bloques de resumen, experiencia profesional y educación.
        </p>
        <div class="container-md mt-4">
            <div class="resumen div-resum">
                <h3><img src="img/cir_item.png" class="pe-1">Resumen</h3>
                <div class="linea-left">
                    <h4 class="mt-3">MARCELA SEVILLA</h4>
                    <p>Desarrolladora web creactiva con más de 2 años de experiencia en el diseño 
                        y desarrollo de sofwaret de escritorio e interfaces graficas para aplicaciones web y sitios web.
                    </p>
                    <ul>
                        <li>Barranquilla Cr28 #85A-107</li>
                        <li>(300) 220-3858</li>
                        <li>sevillamarcela514@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="exp-pro div-resum">
                <h3><img src="img/cir_item.png" class="pe-1">Experiencia Profesional</h3>
                <div class="linea-left">
                    <h4 class="mt-3">ESPECIALISTA EN DESARROLLO WEB</h4>
                    <span class="fs-6 text-secondary fw-bold p-2">2021-Presente</span>
                    <ul>
                        <li class="pb-3">Liderar el diseño, desarrollo e implementación de los materiales de comunicación 
                            gráficos, de maquetación y de producción.
                        </li>
                        <li class="pb-3">
                            Delegar tareas a los 7 miembros del equipo de diseño y asesorar en todos los aspectos del proyecto.
                        </li>
                        <li class="pb-3">
                            Supervisar la evaluación de todos los materiales gráficos para garantizar la calidad y precisión del diseño.
                        </li>
                        <li class="pb-3">
                            Gestioné hasta 5 proyectos o tareas en un momento dado bajo presión.
                        </li>
                        <li class="pb-3">
                            Creé más de 4 presentaciones y propuestas de diseño al mes para clientes y gerentes de cuentas.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="educacion div-resum">
                <h3><img src="img/cir_item.png" class="pe-1">Educación</h3>
                <div class="linea-left">
                    <h4 class="mt-3">TÉCNICO EN PROGRAMACIÓN Y DESARROLLO DE SOFTWARE</h4>
                    <span class="fs-6 text-secondary fw-bold p-2">2019-2021</span>
                    <p>
                        Me gradué de bachiller en el año 2021 del colegio I.E.D San José, tuve la oportunidad 
                        de escoger una carrera técnica que ofrece el programa de articulación con la media de 
                        la institución Sena, la cual realicé los dos últimos años de secundaria y recibí mi 
                        título como técnica en programación de software el mismo año que me gradué.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio mg-pd" data-aos="fade-up">
        <h2 id="portfolio" class="titulo-2 mt-5">PORTFOLIO</h2>
        <p class="txt fs-4">
            En esta sección se muestran los proyectos más recientes y populares que he realizado.
        </p>
        <div class="container-md mt-5">
            <div class="img-portfolio img1 shadow" data-aos="zoom-in-down">
                <div class="enlace"><a href="#"><img src="img/enlace.png"></a></div>
            </div>
            <div class="img-portfolio img2 shadow" data-aos="zoom-in-down">
                <div class="enlace"><a href="#"><img src="img/enlace.png"></a></div>
            </div>
            <div class="img-portfolio img3 shadow" data-aos="zoom-in-down">
                <div class="enlace"><a href="#"><img src="img/enlace.png"></a></div>
            </div>
            <div class="img-portfolio img4 shadow" data-aos="zoom-in-down">
                <div class="enlace"><a href="#"><img src="img/enlace.png"></a></div>
            </div>
            <div class="img-portfolio img5 shadow" data-aos="zoom-in-down">
                <div class="enlace"><a href="#"><img src="img/enlace.png"></a></div>
            </div>
            <div class="img-portfolio img6 shadow" data-aos="zoom-in-down">
                <div class="enlace"><a href="#"><img src="img/enlace.png"></a></div>
            </div>
        </div>
    </section>
    <section id="services" class="services" data-aos="fade-up">
        <h2 class="titulo-2 mt-5">SERVICES</h2>
        <div class="album py-5">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col" data-aos="fade-up" data-aos-duration="3000">
                    <div class="card shadow-sm">
                      <img src="img/card-1.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
          
                      <div class="card-body">
                        <p class="card-text">Diseñar, programar, aplicar y mantener sistemas informáticos.</p>
                      </div>
                    </div>
                </div>
    
                <div class="col" data-aos="fade-up" data-aos-duration="3000">
                    <div class="card shadow-sm">
                      <img src="img/card-2.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
          
                      <div class="card-body">
                        <p class="card-text">Ayuda para la otipmización de los datos que maneja su empresa.</p>
                      </div>
                    </div>
                </div>
                  
                <div class="col" data-aos="fade-up" data-aos-duration="3000">
                    <div class="card shadow-sm">
                      <img src="img/car-3.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
          
                      <div class="card-body">
                        <p class="card-text">Investigar para crear software y hardware en una empresa u organización.</p>
                      </div>
                    </div>
                </div>
        
                <div class="col" data-aos="fade-up" data-aos-duration="3000">
                    <div class="card shadow-sm">
                      <img src="img/card-4.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
          
                      <div class="card-body">
                        <p class="card-text">Diseño y mantenimienro de los sitios web.</p>
                      </div>
                    </div>
                </div>
                  
                <div class="col" data-aos="fade-up" data-aos-duration="3000">
                  <div class="card shadow-sm">
                    <img src="img/card-5.jfif" class="bd-placeholder-img card-img-top" width="100%" height="225">
        
                    <div class="card-body">
                      <p class="card-text">Administrador de servicios informáticos.</p>
                    </div>
                  </div>
                </div>
    
                <div class="col" data-aos="fade-up" data-aos-duration="3000">
                  <div class="card shadow-sm">
                    <img src="img/card-6.jpg" class="bd-placeholder-img card-img-top" width="100%" height="225">
        
                    <div class="card-body">
                      <p class="card-text">Seguridad informática y protección de datos.</p>
                    </div>
                  </div>
                </div>
        
              </div>
            </div>
        </div>
    </section>
    <aside class="comentarios bg-primary bg-gradient my-2 py-4" data-aos="fade-up">
        <h2 class="titulo-2">TESTIMONIALS</h2>
        <div class="container marketing mt-4 text-light">
            <div class="row">
                <div class="col-lg-4 text-center" data-aos="fade-down">
                    <img src="img/client1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2 class="fw-normal text-center">Laura</h2>
                    <p class="fs-5">"Panel de administración muy accesible, además de brindar integración con wordpress, drupal, etc. Gestión de sitios y accesos muy fácil e intuitiva."</p>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-down">
                    <img src="img/client3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2 class="fw-normal">David</h2>
                    <p class="fs-5">"Mantiene informado sobre los últimas actualizaciones informáticas y da ayudas útiles a problemas cotidianos."</p>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-down">
                    <img src="img/client2.png" class="bd-placeholder-img rounded-circle" width="140" height="140">
                    <h2 class="fw-normal">Maria</h2>
                    <p class="fs-5">"Personal con experiencia, un servicio rápido y excepcional.
                    Adaptado a la necesidad del cliente en cada momento y con amplias alternativas."</p>
                </div>
            </div>
        </div>
    </aside>
    <section id="contact" class="contact my-5 px-4" data-aos="fade-up">
        <h2 class="titulo-2">CONTACT</h2>
        <p class="txt fs-4">Puedes Contactarte conmigo a través del correo, celuler o dejando un mensaje.</p>
        <div class="container mt-4">
              <div class="row">
                <div class="col-md-5 col-lg-4" data-aos="fade-down">
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between">
                      <div>
                        <h5 class="my-0"><img src="img/ubicacion.png" class="me-2">Location</h5>
                        <small class="text-muted fs-6 ps-4">Barranquilla Cr28 #85A-107</small>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                      <div>
                        <h5 class="my-0"><img src="img/email.png" class="me-2">Email</h5>
                        <small class="text-muted fs-6 ps-4">sevillalopez514@gmail.com</small>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                      <div>
                        <h5 class="my-0"><img src="img/llamada.png" class="me-2">Call</h5>
                        <small class="text-muted fs-6 ps-4">+57 3002203858</small>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-7" data-aos="fade-down">
                  <form class="needs-validation" novalidate>
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label">Your name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                      </div>
            
                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">Your email</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                      </div>
            
                      <div class="col-12">
                        <label for="email" class="form-label">Subjet</label>
                        <input type="email" class="form-control" id="email">
                      </div>
            
                      <div class="col-12">
                        <label for="address" class="form-label">Message</label>
                        <textarea class="form-control" id="floatingTextarea"></textarea>
                      </div>
      
                     <button class="w-100 btn btn-primary btn-lg" type="submit">Send Message</button>
                  </form>
                </div>
              </div>
          </div>
    </section>
    <footer class="py-3 my-4" data-aos="fade-up">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item ms-4"><a class="text-muted" href="https://api.whatsapp.com/send?phone=573002203858&text=Hola">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-whatsapp text-info" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
            </a></li>
            <li class="nav-item ms-4"><a class="text-muted" href="https://www.instagram.com">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram text-info" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>
            </a></li>
            <li class="nav-item ms-4"><a class="text-muted" href="https://www.facebook.com">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook text-info" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>
            </a></li>
        </ul>
          
        <p class="text-center text-muted fs-5">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bootstrap-fill text-info" viewBox="0 0 16 16">
                <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
                <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>
              </svg>
        </a>&copy; 2022 Marcela Sevilla</p>
    </footer>

    <script src="JS/jquery-1.11.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="JS/jquery.magnific-popup.js"></script>
    <script src="JS/slick.min.js"></script>
    <script src="JS/jquery.collapse.js"></script>
  
    <script src="JS/plugins.js"></script>
    <script src="JS/main.js"></script>

    <!-- LIBRERIA AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>