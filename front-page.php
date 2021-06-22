<?php get_header(); ?>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner">
                        <div class="banner__txt">
                            <h1>Lo Encalada 151, Ñuñoa. </h1>
                            <a class="btn-primary" href="">Ver proyecto</a>
                        </div>
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/banner-1.png">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner">
                        <div class="banner__txt">
                            <h1>Conoce los últimos proyectos</h1>
                            <a class="btn-primary" href="">Ver todos los proyecto</a>
                        </div>
                        <img src="https://www.ifocus.cl/wp-content/uploads/2019/06/slide-1.jpg">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </section>

</header>

    <div class="happy">
        <div class="container-fluid ">
            <div class="happy__main">
                <div class="happy__txt">
                    <h3>¡Enfocados en ti!</h3>
                    <p>Buscamos entregar a nuestros clientes propiedades con altos estándares de confort y excelente diseño interior de manera que su valor perdure en el tiempo. Constantemente estamos buscando elementos innovadores que aporten a estos objetivos.</p>
                </div>
            </div>

        </div>
    </div>
    <section class="project">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-12">
                    <h2>Proyectos en Venta</h2>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <span class="status"><i class="bi bi-clock-history"></i>Piloto</span>
                    <div class="project__item">
                        <div class="project__photo"><img src="<?php echo get_template_directory_uri()?>/assets/img/home_encalada.jpg"></div>
                        <div class="project__txt">
                            <span class="city">Ñuñoa</span>
                            <h3>Lo Encalada 151</h3>
                            <p>Edificio Lo Encalada 151, construcción de mediana altura, ideal para la vida familiar e integración con el entorno de la ciudad.</p>
                            <p>Con departamentos de 1, 2 y 3 dormitorios distribuidos en 9 pisos.</p>
                            <a class="btn-primary" href="/ifocus/edificio-lo-escalada/">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <span class="status"><i class="bi bi-clock"></i>Entrega Inmediata</span>
                    <div class="project__item">
                        <div class="project__photo"><img src="<?php echo get_template_directory_uri()?>/assets/img/home_toribio.jpg"></div>
                        <div class="project__txt">
                            <span class="city">Ñuñoa</span>
                            <h3>Santo Toribio</h3>
                            <p>Santo Toribio es la nueva propuesta de IFocus Inmobiliaria, ubicado en la  calle Mujica 156 esq. Pasaje Santo Toribio, en pleno barrio Italia y a pasos del Parque Bustamante.</p>
                            <a class="btn-primary" href="/ifocus/edificio-santo-toribio/">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <span class="status"><i class="bi bi-clock"></i>Entrega Inmediata</span>
                    <div class="project__item">
                        <div class="project__photo"><img src="<?php echo get_template_directory_uri()?>/assets/img/home_canas.jpg"></div>
                        <div class="project__txt">
                            <span class="city">Ñuñoa</span>
                            <h3>Espacio Cañas</h3>
                            <p>Edificio Espacio Cañas es una novedosa propuesta de diseño arquitectónico que contempla solo 34 departamentos de 1, 2 y 3 dormitorios con elevados estándares de terminaciones  y  espacios.</p>
                            <a class="btn-primary" href="/ifocus/edificio-espacio-canas/">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <span class="status"><i class="bi bi-clock"></i>Entrega Inmediata</span>
                    <div class="project__item">
                        <div class="project__photo"><img src="<?php echo get_template_directory_uri()?>/assets/img/home_lince.jpg"></div>
                        <div class="project__txt">
                            <span class="city">Lima / Perú</span>
                            <h3>Lince</h3>
                            <p>Lince, un distrito de Lima, Perú moderno a pocos minutos de San Isidro y del Parque de las Aguas y a pasos de de Centros comerciales, Universidades, Institutos de Educación.</p>
                            <a class="btn-primary" href="/ifocus/edificio-lince/">Ver Proyecto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <section class="success">
        <div class="container-fluid ">
            <div class="row ">
                 <div class="col-12">
                    <h2>Proyectos Anteriores</h2>
                </div>
                <div class="col-12">

                    <div class="glide glide__success">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                            <li class="glide__slide">
                                <p>Edificio Patio Chiloe</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_01.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <p>Edificio Manuel de salas 303</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_02.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <p>Edificio Centric</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_03.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <p>Edificio Irarrázabal</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_04.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <p>Espacio Condell</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_05.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <p>Edificio Panorama Zenteno</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_06.jpg" alt="">
                            </li>
                            <li class="glide__slide">
                                <p>Edificio Boulevard Arequipa</p>
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/build_07.jpg" alt="">
                            </li>
                            </ul>
                        </div>
                        <div data-glide-el="controls">
                            <button class="slider__arrow slider__arrow--prev glide__arrow glide__arrow--prev" data-glide-dir="<">
                            <i class="bi bi-chevron-left"></i>
                            </button>

                            <button class="slider__arrow slider__arrow--next glide__arrow glide__arrow--next" data-glide-dir=">">
                            <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="process">
        <div class="container-fluid ">
            <div class="row ">
                 <div class="col-12">
                    <h2>Proceso de Compra</h2>
                </div>
            </div>

            <div class="row justify-content-lg-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="process__item">
                        <span>1</span>
                        <i class="bi bi-building"></i>
                        <h4>Cotizar</h4>
                        <p>Cotiza nuestros departamentos en sala de venta (previa cita), en nuestro sitio web www.ifocus.cl o a los teléfonos. </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="process__item">
                        <span>2</span>
                        <i class="bi bi-pencil-square"></i>
                        <h4>Reservar</h4>
                        <p>La vigencia de la reserva es de 10 días y deberás dejar una garantía de $250.000</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="process__item">
                        <span>3</span>
                        <i class="bi bi-file-medical"></i>
                        <h4>Promesar</h4>
                        <p>Pre aprobado el crédito, ya podrás firmar la promesa de compraventa en la que se detallará la información técnica del departamento, estacionamiento, bodega y los montos a pagar.</p>
                    </div>
                </div>
                <div class="col-12 d-md-none d-lg-block  "></div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="process__item">
                        <span>4</span>
                        <i class="bi bi-file-text"></i>
                        <h4>Escritura</h4>
                        <p>Recibida la recepción final e inscripción en el Conservador de Bienes Raíces, podrás iniciar el proceso de escrituración. Tendrás unplazo de 60 días para obtener te crédito.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="process__item">
                        <span>5</span>
                        <i class="bi bi-emoji-smile"></i>
                        <h4>Entrega</h4>
                        <p>Firmada la escritura de compraventa, se programará la entrega de tu departamento; momento en el que además recibirás las garantías de los equipamientos y el Manual del Propietario.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="process__item">
                        <span>6</span>
                        <i class="bi bi-file-check"></i>
                        <h4>Postventa</h4>
                        <p>Entregada la propiedad, se formalizará tu recepción en el Acta de Entrega, en la que deberás dejar constancia de cualquier observación en caso de que las hubiere.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact">
         <div class="container-fluid ">
            <div class="row ">
                 <div class="col-12">
                    <h2>Contacto</h2>
                </div>
                <div class="col-12 col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4167322108037!2d-70.60486018490899!3d-33.41237810294524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf41419b050b%3A0x7841168a137f28c9!2sAv%20Vitacura%202909%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1621299365537!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-12 col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Completo">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Teléfono">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Teléfono">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Proyecto de Interés</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <div>
                            <a class="btn-primary" href="">Enviar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<main class='container-fluid '>

</main>

<?php get_footer(); ?>