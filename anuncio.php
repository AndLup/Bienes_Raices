<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <picture>
            <source src="build/img/destacada.webp" type="img/webp">
            <source src="build/img/destacada.jpg" type="img/jpeg">
            <img loading = "lazy" src="build/img/destacada.jpg" alt="Casa Destacada">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono wc">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad obcaecati sequi quia quis minus tenetur adipisci a illo nam, saepe fuga cumque dignissimos amet ex quod enim consectetur dolore rerum, iste earum! Voluptatem vitae blanditiis earum quasi aliquid officiis, totam quae ipsam similique qui enim quis quidem! Quos, omnis. Eos consequuntur voluptatem ratione sit delectus eligendi consequatur, atque libero, sequi error minima. Accusantium fuga dolor veritatis repudiandae minus cupiditate tempore pariatur earum aliquid, quo facere, magni officia voluptas iusto quisquam.</p>
        </div>
    </main>

    <?php 
        incluirTemplate('footer');
    ?>
    