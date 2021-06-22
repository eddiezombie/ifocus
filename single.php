<?php get_header(); ?>

<?php if(have_posts()){
        while(have_posts()){
            the_post();
            $urls = get_permalink();

        ?>
            <?php if ($urls == "http://www.erodriguez.cl/ifocus/edificio-santo-toribio/"){ ?>
                    <div id="carouselExampleIndicators" class="carousel--single carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio.jpg">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio.jpg">
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

        <main class=''>

            <section class="important">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/place.png">
                            <span>Ñuñoa</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/bed.png">
                            <span>1 · 2 dorm.</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/shower.png">
                            <span>1 · 2 baños</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/sofa.png">
                            <span>28,46 a 54,73 m2</span>
                        </div>
                        <div class="col-12 col-lg-3 important__buttons">
                            <a href="#" class="btn-terceary btn-terceary--border" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar Visita</a>
                            <a href="#" class="btn-primary"><i class="bi bi-pin-map"></i> Tour virtual</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">


                            <h2 class="title">Edificio Santo Toribio</h2>

                            <div class="stage">Entrega Inmediata</div>
                            <p>Santo Toribio es la nueva propuesta de IFocus Inmobiliaria, ubicado en la  calle Mujica 156 esq. Pasaje Santo Toribio, en pleno barrio Italia y a pasos del Parque Bustamante.</p>
                            <p>Con solo 8 pisos, está ubicado en un entorno residencial con todas las ventajas de la centralidad y la cercanía de tres líneas de metro, una amplia oferta de servicios, cafes restaurantes y una vida cultural inigualable.</p>

                            <ul>
                                <li><i class="fas fa-couch"></i> <span>Piso de gres porcelánico</span></li>
                                <li><i class="fas fa-window-maximize"></i> <span>Ventanas termopanel</span></li>
                                <li><i class="fas fa-shower"></i> <span>Agua caliente por termo eléctrico</span></li>
                                <li><i class="fas fa-concierge-bell"></i> <span>Cocina equipada con horno, campana, encimera vitrocerámica y cubierta de granito</span></li>
                            </ul>


                        </div>
                        <div class="col-12 col-md-1"></div>
                        <div class="col-12 col-md-4 description__comunes">
                            <h2 class="title">Equipamientos</h2>
                            <ul>
                                <li><i class="fas fa-utensils"></i> <span>Salón con cocina gourmet</span></li>
                                <li><i class="fas fa-laptop"></i> <span>Sala Coworking</span></li>
                                <li><i class="fas fa-dumbbell"></i> <span>Gimnacio</span></li>
                                <li><i class="fas fa-swimmer"></i> <span>Piscina en primer piso</span></li>
                                <li><i class="fas fa-drumstick-bite"></i> <span>Quinchos panorámicos</span></li>
                                <li><i class="fas fa-bicycle"></i> <span>Bicicleteros</span></li>
                                <li><i class="fas fa-tshirt"></i> <span>Lavandería</span></li>
                                <li><i class="fas fa-video"></i> <span>Seguridad con acceso controlado</span></li>
                                <li><i class="fas fa-store"></i> <span>Locales comerciales</span></li>
                            </ul>
                        </div>
                        <div class="col-12 "><a href="#" class="btn-primary btn-primary--big">Cotizar</a></div>
                    </div>
                </div>

            </section>

            <section class="gallery">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Galería</h2></div>
                        <div class="col-12 gallery__center">
                            <div class="gallery__button">
                                <a data-gallery="carousel_int" class="gallery__btn btn-border active">Interiores</a>
                                <a data-gallery="carousel_int2"  class="gallery__btn btn-border">Exteriores</a>
                                <a data-gallery="carousel_int3" class="gallery__btn btn-border">Espacios Comunes</a>
                            </div>
                            <div class="gallery__photos">
                                <div id="carousel_int" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio/01.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio/02.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div id="carousel_int2" class="carousel__hide carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio/00.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div id="carousel_int3" class="carousel__hide carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio/03.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio/04.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/toribio/05.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="floors">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Plantas</h2></div>
                        <div class="floors__select">
                            <label for="">Selecciona una planta</label>
                            <select name="select__floor" id="selectFloor">
                                <option value="floor_01">Tipo A1 / ESTUDIO 1B</option>
                                <option value="floor_02">Tipo B1 / 1D 1B</option>
                                <option value="floor_03">Tipo B2 / 1D 1B</option>
                                <option value="floor_04">Tipo C1 / 2D 1B</option>
                                <option value="floor_05">Tipo C3 / 2D 1B</option>
                                <option value="floor_06">Tipo D2 / 2D 1B</option>
                                <option value="floor_07">Tipo D3 / 2D 2B</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4 floors__main-options">
                            <h3>Estudio</h3>
                            <div class="floors__options">
                                <a data-floors="floor_01" class="floors__item active" >Tipo A1 / ESTUDIO 1B</a>
                            </div>
                            <h3>1 Dormitorio</h3>
                            <div class="floors__options">
                                <a data-floors="floor_02" class="floors__item">Tipo B1 / 1D 1B</a>
                                <a data-floors="floor_03" class="floors__item">Tipo B2 / 1D 1B</a>
                            </div>
                            <h3>2 Dormitorios</h3>
                            <div class="floors__options">
                                <a data-floors="floor_04" class="floors__item">Tipo C1 / 2D 1B</a>
                                <a data-floors="floor_05" class="floors__item">Tipo C3 / 2D 1B</a>
                                <a data-floors="floor_06" class="floors__item">Tipo D2 / 2D 1B</a>
                                <a data-floors="floor_07" class="floors__item">Tipo D3 / 2D 2B</a>
                            </div>
                        </div>

                        <!-- item -->
                        <div id="i_floor_01" class="col-5 col-md-5 floors__image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/A1.png">
                        </div>
                        <div id="floor_01" class="col-7 col-md-3 floor_content">

                            <h4>TIPO A1 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 2.677</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 28,46 m2 a 30,00 m2</p>
                                    <p><span>Terraza:</span> Sin terraza</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>28,46 m2 a 30,00 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=A1" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_02" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/B1.png">
                        </div>
                        <div id="floor_02" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>TIPO B1 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.340</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 33,35 m2 a 35,53 m2</p>
                                    <p><span>Terraza:</span> 3.59 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>36,94 m2 a 39,12 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=B1" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_03" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/B2.png">
                        </div>
                        <div id="floor_03" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>TIPO B2 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.220</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 35,03 m2 a 35,68 m2</p>
                                    <p><span>Terraza:</span> 0 m2 a 2,69 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 4,97 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>35,02 m2 a 40,65 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=B2" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_04" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/C1.png">
                        </div>
                        <div id="floor_04" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>TIPO C1 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.790</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 43.53 m2</p>
                                    <p><span>Terraza:</span> 3.91 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 11,92 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>47,44 m2 a 59,36 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=C1" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_05" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/C3.png">
                        </div>
                        <div id="floor_05" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO C3 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 4.103</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 47.29 m2</p>
                                    <p><span>Terraza:</span> 3.64 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 24,52 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>50,93 m2 a 75,45 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=C3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_06" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/D2.png">
                        </div>
                        <div id="floor_06" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO D2 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 4.536</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 53,43 m2 a 55,96 m2</p>
                                    <p><span>Terraza:</span> 2,59 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>56,02 m2 a 58,55 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D2" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_07" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors/D3.png">
                        </div>
                        <div id="floor_07" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO D3 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 4.775</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 51.14 m2</p>
                                    <p><span>Terraza:</span> 3.59 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>54.73 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-santo-toribio-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>






                        </div>
                    </div>
                </div>

            </section>

            <section class="virtual">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Tour Virtual 360</h2></div>
                        <div class="col-12 virtual__center">
                            <div class="virtual__photos">
                                <iframe width="800" height="410" class="3dview pa" src="https://my.matterport.com/show/?m=T9N3JhYwDCW" frameborder="0" allowfullscreen="" allow="vr"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="place">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Ubicación</h2></div>
                        <div class="col-12 col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4167322108037!2d-70.60486018490899!3d-33.41237810294524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf41419b050b%3A0x7841168a137f28c9!2sAv%20Vitacura%202909%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1621299365537!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"> </iframe>
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <h3>Ubicación</h3>
                                <p>Luis Cousiño 6185, Inserto en el Parque Cousiño Macul, Peñalolén.</p>
                            </div>
                            <div>
                                <h3>Lugares cercanos</h3>
                                <p><i class="bi bi-basket"></i> 2 Supermercados</p>
                                <p><i class="bi bi-basket"></i> Mall Ñuñoa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="buy">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Cotizar</h2></div>
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
                        <div class="col-12 col-md-6">
                            <div>
                                <h3><i class="bi bi-building"></i>Sala de ventas</h3>
                                <p>Lunes a domingo de 11:00 a 19:00 hrs.</p>
                            </div>
                            <div>
                                <h3><i class="bi bi-pin-map"></i>Ubicación</h3>
                                <p>Luis Cousiño 6185, Inserto en el Parque Cousiño Macul, Peñalolén.</p>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="ejecutivo">
                                        <h3><i class="bi bi-people"></i>Ejecutivo</h3>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/user.png">
                                        <p class="name">Orlando Poblete</p>
                                        <p>opoblete@ifocus.cl</p>
                                        <p>+56 9 3088 1943</p>
                                        <a class="btn-terceary" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="ejecutivo">
                                        <h3><i class="bi bi-people"></i>Ejecutivo</h3>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/user.png">
                                        <p class="name">Carla González</p>
                                        <p>cgonzalez@ifocus.cl</p>
                                        <p>+56 9 6134 4645</p>
                                        <a class="btn-terceary" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </main>

            <?php } ?>

            <?php if ($urls == "http://www.erodriguez.cl/ifocus/edificio-lo-escalada/"){ ?>


                        <div id="carouselExampleIndicators" class="carousel--single carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/main.jpg">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/main.jpg">
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

        <main class=''>

            <section class="important">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/place.png">
                            <span>Ñuñoa</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/bed.png">
                            <span>1 · 3 dorm.</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/shower.png">
                            <span>1 · 2 baños</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/sofa.png">
                            <span>37 a 103 m2</span>
                        </div>
                        <div class="col-12 col-lg-3 important__buttons">
                            <a href="#" class="btn-terceary btn-terceary--border" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar Visita</a>
                            <a href="#" class="btn-primary"><i class="bi bi-pin-map"></i> Tour virtual</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">


                            <h2 class="title">Edificio Lo Escalada</h2>

                            <div class="stage">Entrega Inmediata</div>
                            <p>Edificio “Lo Encalada 151” es la nueva propuesta de IFOCUS Inmobiliaria, ideal para la vida familiar o para aquellos que disfrutan de un entorno urbano lleno de alternativas para tiempo libre.</p>
                            <p>El proyecto se encuentra ubicado en calle “Lo Encalada 151”, comuna de Ñuñoa, en un barrio residencial tranquilo, pero con todas las ventajas de la centralidad. A pasos de dos líneas del metro (L3-L5) y de avenida Irarrázaval, que te permiten una insuperable conectividad a cualquier punto de Santiago, más la amplia oferta de supermercados, cafés, restaurantes y una vida cultural inigualable (cercano a Barrio Italia) completan tus necesidades más importantes al momento de decidir donde vivir.</p>

                            <ul>
                                <li><i class="fas fa-couch"></i> <span>Piso de gres porcelánico</span></li>
                                <li><i class="fas fa-window-maximize"></i> <span>Ventanas termopanel</span></li>
                                <li><i class="fas fa-shower"></i> <span>Agua caliente por termo eléctrico</span></li>
                                <li><i class="fas fa-concierge-bell"></i> <span>Cocina equipada con horno, campana, encimera vitrocerámica y cubierta de granito</span></li>
                            </ul>


                        </div>
                        <div class="col-12 col-md-1"></div>
                        <div class="col-12 col-md-4 description__comunes">
                            <h2 class="title">Equipamientos</h2>
                            <ul>
                                <li><i class="fas fa-utensils"></i> <span>Salón con cocina gourmet</span></li>
                                <li><i class="fas fa-dumbbell"></i> <span>Gimnacio</span></li>
                                <li><i class="fas fa-swimmer"></i> <span>Piscina en primer piso</span></li>
                                <li><i class="fas fa-drumstick-bite"></i> <span>Quinchos</span></li>
                                <li><i class="fas fa-bicycle"></i> <span>Bicicleteros</span></li>
                                <li><i class="fas fa-video"></i> <span>Seguridad con acceso controlado</span></li>
                            </ul>
                        </div>
                        <div class="col-12 "><a href="#" class="btn-primary btn-primary--big">Cotizar</a></div>
                    </div>
                </div>

            </section>

            <section class="gallery">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Galería</h2></div>
                        <div class="col-12 gallery__center">
                            <div class="gallery__button">
                                <a data-gallery="carousel_int" class="gallery__btn btn-border active">Interiores</a>
                                <a data-gallery="carousel_int2"  class="gallery__btn btn-border">Exteriores</a>
                                <a data-gallery="carousel_int3" class="gallery__btn btn-border">Espacios Comunes</a>
                            </div>
                            <div class="gallery__photos">
                                <div id="carousel_int" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/01.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/02.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div id="carousel_int2" class="carousel__hide carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/06.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/07.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div id="carousel_int3" class="carousel__hide carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/03.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/04.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/encalada/05.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="floors">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Plantas</h2></div>
                        <div class="floors__select">
                            <label for="">Selecciona una planta</label>
                            <select name="select__floor" id="selectFloor">
                                <option value="floor_01">Tipo B1 / 1D 1B</option>
                                <option value="floor_02">Tipo B2 / 1D 1B</option>
                                <option value="floor_03">Tipo B3 / 1D 1B</option>
                                <option value="floor_04">Tipo B4 / 1D 1B</option>
                                <option value="floor_05">Tipo C1 / 2D 1B</option>
                                <option value="floor_06">Tipo C2 / 2D 1B</option>
                                <option value="floor_07">Tipo C3 / 2D 1B</option>
                                <option value="floor_08">Tipo D1 / 2D 2B</option>
                                <option value="floor_09">Tipo D2 / 2D 2B</option>
                                <option value="floor_10">Tipo D3 / 2D 2B</option>
                                <option value="floor_11">Tipo D4 / 2D 2B</option>
                                <option value="floor_12">Tipo E1 / 3D 2B</option>
                                <option value="floor_13">Tipo E2 / 3D 2B</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4 floors__main-options">
                            <h3>1 Dormitorio</h3>
                            <div class="floors__options">
                                 <div class="row">
                                    <div class="col-6"><a data-floors="floor_01" class="floors__item active" >Tipo B1 / 1D 1B</a></div>
                                    <div class="col-6"><a data-floors="floor_02" class="floors__item">Tipo B2 / 1D 1B</a></div>
                                    <div class="col-6"><a data-floors="floor_03" class="floors__item">Tipo B3 / 1D 1B</a></div>
                                    <div class="col-6"><a data-floors="floor_04" class="floors__item">Tipo B4 / 1D 1B</a></div>
                                 </div>
                            </div>
                            <h3>2 Dormitorios</h3>
                            <div class="floors__options">
                                <a data-floors="floor_05" class="floors__item">Tipo C1 / 2D 1B</a>
                                <a data-floors="floor_06" class="floors__item">Tipo C2 / 2D 1B</a>
                                <a data-floors="floor_07" class="floors__item">Tipo C3 / 2D 1B</a>
                                <a data-floors="floor_08" class="floors__item">Tipo D1 / 2D 2B</a>
                                <a data-floors="floor_09" class="floors__item">Tipo D2 / 2D 2B</a>
                                <a data-floors="floor_10" class="floors__item">Tipo D3 / 2D 2B</a>
                                <a data-floors="floor_11" class="floors__item">Tipo D4 / 2D 2B</a>
                            </div>
                            <h3>3 Dormitorios</h3>
                            <div class="floors__options">
                                <a data-floors="floor_12" class="floors__item">Tipo E1 / 3D 2B</a>
                                <a data-floors="floor_13" class="floors__item">Tipo E2 / 3D 2B</a>
                            </div>
                        </div>

                        <!-- item -->
                        <div id="i_floor_01" class="col-5 col-md-5 floors__image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/b1.png">
                        </div>
                        <div id="floor_01" class="col-7 col-md-3 floor_content">

                            <h4>TIPO B1 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.139</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 33,62 m2</p>
                                    <p><span>Terraza:</span> 3,6 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 10,50 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>37,22 m2 a 47,72 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/lo-encalada?tipo=B1" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_02" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/b2.png">
                        </div>
                        <div id="floor_02" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>TIPO B2 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.017</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 33,22 m2</p>
                                    <p><span>Terraza:</span> 3.6 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 10,50 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>35,82 m2 a 46,32 m2</p>
                                </li>
                            </ul>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_03" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/B3.png">
                        </div>
                        <div id="floor_03" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>TIPO B3 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.056</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 34 m2</p>
                                    <p><span>Terraza:</span> 0 m2 a 3,07 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 6 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>37,07 m2 a 40 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=B2" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_04" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/b4.png">
                        </div>
                        <div id="floor_04" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>TIPO B4 / 1D 1B</h4>
                            <ul>
                                <li>
                                    <strong>1 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.174</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 35,39 m2</p>
                                    <p><span>Terraza:</span> 0 m2 a 3,07 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 6 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>38,46 m2 a 41,39 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=C1" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_05" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/c1.png">
                        </div>
                        <div id="floor_05" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO C1 / 2D 1B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.821</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 43,39 m2</p>
                                    <p><span>Terraza:</span> 0 m2 a 3,82 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 21,22 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>47,21 m2 a 64,61 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=C3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_06" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/c2.png">
                        </div>
                        <div id="floor_06" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO C2 / 2D 1B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.919</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 44,82 m2</p>
                                    <p><span>Terraza:</span> 3,27 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>48,09 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D2" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_07" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/c3.png">
                        </div>
                        <div id="floor_07" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO C3 / 2D 1B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorio / 1 Baño:</strong>
                                    <p>Desde UF 3.718</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 42,95 m2</p>
                                    <p><span>Terraza:</span> 2,23 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>45,18 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_08" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/d1.png">
                        </div>
                        <div id="floor_08" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO D1 / 2D 2B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorios / 2 Baño:</strong>
                                    <p>Desde UF 4.381</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 52,77 m2</p>
                                    <p><span>Terraza:</span> 0 m2 a 3,07 m2</p>
                                    <p><span>Patio:</span> 0 m2 a 12,25 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>55,84 m2 a 65,02 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_09" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/d2.png">
                        </div>
                        <div id="floor_09" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO D2 / 2D 2B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorio / 2 Baño:</strong>
                                    <p>Desde UF 5.198</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 57,91 m2</p>
                                    <p><span>Terraza:</span> 12,42 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>69,63 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_10" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/d3.png">
                        </div>
                        <div id="floor_10" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO D3 / 2D 2B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorio / 2 Baño:</strong>
                                    <p>Desde UF 5.363</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 58,68 m2</p>
                                    <p><span>Terraza:</span> 14,3 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>72,98 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>


                        <!-- item -->
                        <div id="i_floor_11" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/d4.png">
                        </div>
                        <div id="floor_11" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO D4 / 2D 2B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorio / 2 Baño:</strong>
                                    <p>Desde UF 4.241</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 46,5 m2</p>
                                    <p><span>Terraza:</span> 6.1 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>52,6 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>


                        <!-- item -->
                        <div id="i_floor_12" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/e1.png">
                        </div>
                        <div id="floor_12" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO E1 / 3D 2B</h4>
                            <ul>
                                <li>
                                    <strong>3 Dormitorio / 2 Baño:</strong>
                                    <p>Desde UF 6.320</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 68,03 m2</p>
                                    <p><span>Terraza:</span> 5,07 m2</p>
                                    <p><span>Patio:</span> 4,59 m2</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>77,69 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>


                        <!-- item -->
                        <div id="i_floor_13" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/floors_encalada/e2.png">
                        </div>
                        <div id="floor_13" class="col-7 col-md-3 floor_content floor_content--inactive">
                            <h4>TIPO E2 / 3D 2B</h4>
                            <ul>
                                <li>
                                    <strong>3 Dormitorio / 2 Baño:</strong>
                                    <p>Desde UF 7.350</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 75,86 m2</p>
                                    <p><span>Terraza:</span> 27,61 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>103,47 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/santo-toribio?tipo=D3" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/09/brochure-loencalada-edificio.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>






                        </div>
                    </div>
                </div>

            </section>

            <!--<section class="virtual">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Tour Virtual 360</h2></div>
                        <div class="col-12 virtual__center">
                            <div class="virtual__photos">
                                <iframe width="800" height="410" class="3dview pa" src="https://my.matterport.com/show/?m=9rdWFy2GFtv" frameborder="0" allowfullscreen="" allow="vr"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->

            <section class="place">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Ubicación</h2></div>
                        <div class="col-12 col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4167322108037!2d-70.60486018490899!3d-33.41237810294524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf41419b050b%3A0x7841168a137f28c9!2sAv%20Vitacura%202909%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1621299365537!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"> </iframe>
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <h3>Ubicación</h3>
                                <p>Luis Cousiño 6185, Inserto en el Parque Cousiño Macul, Peñalolén.</p>
                            </div>
                            <div>
                                <h3>Lugares cercanos</h3>
                                <p><i class="bi bi-basket"></i> 2 Supermercados</p>
                                <p><i class="bi bi-basket"></i> Mall Ñuñoa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="buy">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Cotizar</h2></div>
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
                        <div class="col-12 col-md-6">
                            <div>
                                <h3><i class="bi bi-building"></i>Sala de ventas</h3>
                                <p>Lunes a domingo de 11:00 a 19:00 hrs.</p>
                            </div>
                            <div>
                                <h3><i class="bi bi-pin-map"></i>Ubicación</h3>
                                <p>Luis Cousiño 6185, Inserto en el Parque Cousiño Macul, Peñalolén.</p>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="ejecutivo">
                                        <h3><i class="bi bi-people"></i>Ejecutivo</h3>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/user.png">
                                        <p class="name">Carla González</p>
                                        <p>cgonzalez@ifocus.cl</p>
                                        <p>+56 9 6134 4645</p>
                                        <a class="btn-terceary" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </main>



            <?php } ?>

            <?php if ($urls == "http://www.erodriguez.cl/ifocus/edificio-espacio-canas/"){ ?>


                 <div id="carouselExampleIndicators" class="carousel--single carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="banner">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/main.jpg">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="banner">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/main.jpg">
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

        <main class=''>

            <section class="important">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/place.png">
                            <span>Ñuñoa</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/bed.png">
                            <span>1 · 3 dorm.</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/shower.png">
                            <span>1 · 2 baños</span>
                        </div>
                        <div class="col-6 col-md-3 col-lg-3">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/sofa.png">
                            <span>60 a 64 m2</span>
                        </div>
                        <div class="col-12 col-lg-3 important__buttons">
                            <a href="#" class="btn-terceary btn-terceary--border" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar Visita</a>
                            <a href="#" class="btn-primary"><i class="bi bi-pin-map"></i> Tour virtual</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="description">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">


                            <h2 class="title">Espacio Lo Cañas</h2>

                            <div class="stage">Entrega Inmediata</div>
                            <p>Edificio Espacio Cañas es una novedosa propuesta de diseño arquitectónico que contempla sólo 34 departamentos de 1, 2 y 3 dormitorios con elevados estándares de terminaciones y espacios que te sorprenderán, dando nuevas posibilidades a tu forma de vivir</p>


                            <ul>
                                <li><i class="fas fa-couch"></i> <span>Piso de gres porcelánico</span></li>
                                <li><i class="fas fa-window-maximize"></i> <span>Ventanas termopanel</span></li>
                                <li><i class="fas fa-shower"></i> <span>Agua caliente por termo eléctrico</span></li>
                                <li><i class="fas fa-concierge-bell"></i> <span>Cocina equipada con horno, campana, encimera vitrocerámica y cubierta de granito</span></li>
                            </ul>


                        </div>
                        <div class="col-12 col-md-1"></div>
                        <div class="col-12 col-md-4 description__comunes">
                            <h2 class="title">Equipamientos</h2>
                            <ul>
                                <li><i class="fas fa-utensils"></i> <span>Salón con cocina gourmet</span></li>
                                <li><i class="fas fa-swimmer"></i> <span>Piscina en primer piso</span></li>
                                <li><i class="fas fa-bicycle"></i> <span>Bicicleteros</span></li>
                                <li><i class="fas fa-video"></i> <span>Seguridad con acceso controlado</span></li>
                            </ul>
                        </div>
                        <div class="col-12 "><a href="#" class="btn-primary btn-primary--big">Cotizar</a></div>
                    </div>
                </div>

            </section>

            <section class="gallery">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Galería</h2></div>
                        <div class="col-12 gallery__center">
                            <div class="gallery__button">
                                <a data-gallery="carousel_int" class="gallery__btn btn-border active">Interiores</a>
                                <a data-gallery="carousel_int2"  class="gallery__btn btn-border">Exteriores</a>
                                <a data-gallery="carousel_int3" class="gallery__btn btn-border">Espacios Comunes</a>
                            </div>
                            <div class="gallery__photos">
                                <div id="carousel_int" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/05.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/06.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div id="carousel_int2" class="carousel__hide carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/03.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/04.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int2" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int2" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                                <div id="carousel_int3" class="carousel__hide carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carousel_int3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carousel_int3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/01.jpg">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="<?php echo get_template_directory_uri()?>/assets/img/canas/02.jpg">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel_int3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel_int3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="floors">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Plantas</h2></div>
                        <div class="floors__select">
                            <label for="">Selecciona una planta</label>
                            <select name="select__floor" id="selectFloor">
                                <option value="floor_01">Tipo B2A / 2D 2B</option>
                                <option value="floor_02">Tipo C2 / 2D 2B</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-4 floors__main-options">
                            <h3>2 Dormitorios</h3>
                            <div class="floors__options">
                                <a data-floors="floor_01" class="floors__item">Tipo B2A / 2D 2B</a>
                                <a data-floors="floor_02" class="floors__item">Tipo C2 / 2D 2B</a>
                            </div>
                        </div>

                        <!-- item -->
                        <div id="i_floor_01" class="col-5 col-md-5 floors__image">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/ec-B2A.jpeg">
                        </div>
                        <div id="floor_01" class="col-7 col-md-3 floor_content">

                            <h4>Tipo B2A / 2D 2B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorios / 2 Baños:</strong>
                                    <p>Desde UF 5.180</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 61 m2</p>
                                    <p><span>Terraza:</span> 3.76 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>64.76 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/espacio-canas?tipo=B2A" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-espacio-ca%C3%B1as-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>

                        <!-- item -->
                        <div id="i_floor_02" class="col-5 col-md-5 floors__image floors__image--inactive">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/ec-C2.jpeg">
                        </div>
                        <div id="floor_02" class="col-7 col-md-3 floor_content floor_content--inactive">

                            <h4>Tipo C2 / 2D 2B</h4>
                            <ul>
                                <li>
                                    <strong>2 Dormitorios / 2 Baños:</strong>
                                    <p>Desde UF 5.198</p>
                                </li>
                                <li class="floors__m2">
                                    <strong>Superficies:</strong>
                                    <p><span>Interior:</span> 57,93 m2 a 58,10 m2</p>
                                    <p><span>Terraza:</span> 10,00 m2 a 10,04 m2</p>
                                    <p><span>Patio:</span> Sin patio</p>
                                </li>
                                <li>
                                    <strong>Total Superficie:</strong>
                                    <p>67,97 m2 a 68,10 m2</p>
                                </li>
                            </ul>
                            <a href="https://cotizacion.mobysuite.com/ifocus/proyecto/espacio-canas?tipo=C2" class="btn-primary" target="_blank">Cotizar</a>
                            <a href="https://www.ifocus.cl/wp-content/uploads/2020/08/brochure-espacio-ca%C3%B1as-1.pdf" class="btn-primary" target="_blank">Brochure</a>
                        </div>







                        </div>
                    </div>
                </div>

            </section>

            <section class="virtual">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Tour Virtual 360</h2></div>
                        <div class="col-12 virtual__center">
                            <div class="virtual__photos">
                                <iframe width="800" height="410" class="3dview pa" src="https://my.matterport.com/show/?m=9rdWFy2GFtv" frameborder="0" allowfullscreen="" allow="vr"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="place">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Ubicación</h2></div>
                        <div class="col-12 col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.4167322108037!2d-70.60486018490899!3d-33.41237810294524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf41419b050b%3A0x7841168a137f28c9!2sAv%20Vitacura%202909%2C%20Las%20Condes%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1621299365537!5m2!1ses!2scl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"> </iframe>
                        </div>
                        <div class="col-12 col-md-6">
                            <div>
                                <h3>Ubicación</h3>
                                <p>Luis Cousiño 6185, Inserto en el Parque Cousiño Macul, Peñalolén.</p>
                            </div>
                            <div>
                                <h3>Lugares cercanos</h3>
                                <p><i class="bi bi-basket"></i> 2 Supermercados</p>
                                <p><i class="bi bi-basket"></i> Mall Ñuñoa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="buy">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12"> <h2 class="title">Cotizar</h2></div>
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
                        <div class="col-12 col-md-6">
                            <div>
                                <h3><i class="bi bi-building"></i>Sala de ventas</h3>
                                <p>Lunes a domingo de 11:00 a 19:00 hrs.</p>
                            </div>
                            <div>
                                <h3><i class="bi bi-pin-map"></i>Ubicación</h3>
                                <p>Luis Cousiño 6185, Inserto en el Parque Cousiño Macul, Peñalolén.</p>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="ejecutivo">
                                        <h3><i class="bi bi-people"></i>Ejecutivo</h3>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/user.png">
                                        <p class="name">Francisco Atherton</p>
                                        <p>fatherton@ifocus.cl</p>
                                        <p>+56 9 4444 9137</p>
                                        <!--<a class="btn-terceary" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/cgonzalez-ifocus?month=2021-05'});return false;">Agendar</a>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </main>



            <?php } ?>

            <?php if ($urls == "http://www.erodriguez.cl/ifocus/edificio-lince/"){ ?>
            lince
            <?php } ?>
        <?php

        }
} ?>


<?php get_footer(); ?>