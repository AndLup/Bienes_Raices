<?php

declare(strict_types = 1);
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>
    
    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quo temporibus illo rerum, quam dolorem voluptas, consequatur, labore distinctio numquam quaerat exercitationem! 
                    Perferendis eos fuga molestias pariatur, laborum iste soluta.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quo temporibus illo rerum, quam dolorem voluptas, consequatur, labore distinctio numquam quaerat exercitationem! 
                    Perferendis eos fuga molestias pariatur, laborum iste soluta.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono A Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis quo temporibus illo rerum, quam dolorem voluptas, consequatur, labore distinctio numquam quaerat exercitationem! 
                    Perferendis eos fuga molestias pariatur, laborum iste soluta.</p>
            </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Deptos en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source src="build/img/anuncio1.webp" type="img/webp"> 
                    <source src="build/img/anuncio1.jpg" type="img/jpeg"> 
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa de lujo junto al lago con excelente vista, acabados de lujo a un estupendo precio </p>
                    <p class="precio">3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
                            <p>4</p>
                        </li>
                    </ul>

                    <a class="boton boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>
                </div><!--  Contenido Anuncio-->
            </div><!--  Anuncio-->
            <div class="anuncio">
                <picture>
                    <source src="build/img/anuncio2.webp" type="img/webp"> 
                    <source src="build/img/anuncio2.jpg" type="img/jpeg"> 
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa Acabados de Lujo</h3>
                    <p>Casa de lujo junto al lago con excelente vista, acabados de lujo a un estupendo precio </p>
                    <p class="precio">2,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
                            <p>4</p>
                        </li>
                    </ul>

                    <a class="boton boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>
                </div><!--  Contenido Anuncio-->
            </div><!--  Anuncio-->
            <div class="anuncio">
                <picture>
                    <source src="build/img/anuncio3.webp" type="img/webp"> 
                    <source src="build/img/anuncio3.jpg" type="img/jpeg"> 
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con Alberca</h3>
                    <p>Casa de lujo junto al lago con excelente vista, acabados de lujo a un estupendo precio </p>
                    <p class="precio">1,800,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
                            <p>4</p>
                        </li>
                    </ul>

                    <a class="boton boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>
                </div><!--  Contenido Anuncio-->
            </div><!--  Anuncio-->
        </div><!--  Contenedor Anuncios-->

        <div class="alinear-derecha">
            <a class="boton-verde" href="anuncios.php">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el Formulario y un Asesor se pondrá en Contacto a la Brevedad</p>
        <a class="boton-amarillo" href="contacto.php">Contáctanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/blog1.webp" type="img/webp">
                        <source src="build/img/blog1.jpg" type="img/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el Techo de tu Casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20-10-2021</span> por: <span>Andmin</span></p>

                        <p>Consejos Para Construir Terraza en el Techo Ahorrando Dinero</p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source src="build/img/blog2.webp" type="img/webp">
                        <source src="build/img/blog2.jpg" type="img/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía Para la Decoración de tu Hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20-11-2021</span> por: <span>Andmin</span></p>

                        <p>Maximiza el espacio de tu hogar aprovechando estos tips de decoración</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Servicio completamente profesional, te guían en cada paso, te asesoran de manera adecuada y sobre todo, lo que es más conveniente y factible de realizar al momento de comprar un imnueble
                </blockquote>
                <p>- Andrés Lupian</p>
            </div>
        </section>
    </div>


    <?php 
        incluirTemplate('footer');
    ?>
   