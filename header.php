<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>

    <!-- Hotjar Tracking Code for My site -->

    <script>

        (function(h,o,t,j,a,r){

            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};

            h._hjSettings={hjid:2430146,hjsv:6};

            a=o.getElementsByTagName('head')[0];

            r=o.createElement('script');r.async=1;

            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;

            a.appendChild(r);

        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');

    </script>
</head>
<body>

<header>
    <section class="top">
        <div class="container-fluid">
            <div>
                <i class="bi bi-envelope-fill"></i>
                <a href="">ventas@ifocus.cl</a>
            </div>
            <div>
                <i class="bi bi-whatsapp"></i>
                <a target="_blank" href="https://wa.me/56930881943">+56 9 3088 1943</a>
            </div>
            <div>
                <i class="bi bi-whatsapp"></i>
                <a  target="_blank" href="https://wa.me/56944449137"> +56 9 4444 9137</a>
            </div>
            <div>
                <i class="bi bi-whatsapp"></i>
                <a target="_blank" href="https://wa.me/56940925108">+56 9 4092 5108</a>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="menu">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-4">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/logoblanco.svg" alt="logo">
                    </div>
                    <div class="col-8 aling-right">
                        <a href="#" class="menu__click" id="menuToggle" onclick="menuToggle();"><i class="bi bi-list"></i></a>
                        <ul class="menu__list" id="menu__list">
                            <li><a href="">Home</a></li>
                            <li><a href="">Proyectos en Venta</a></li>
                            <li><a href="">Proyectos Anteriores</a></li>
                            <li><a href="">Proceso de Compra</a></li>
                            <li><a href="">Contáctanos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



