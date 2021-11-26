<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    
    <main class="contenedor seccion">
        <h1>Nosotros</h1>
        <section class="seccion-nosotros">
            <div class="principal">
                <div class="cont-imagen">
                    <picture>
                        <source src="build/img/nosotros.webp" type="img/webp"> 
                        <source src="build/img/nosotros.jpg" type="img/jpeg"> 
                        <img loading="lazy" src="build/img/nosotros.jpg" alt="anuncio">
                    </picture>
                </div>

                <h2>Más de 25 años de experiencia</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, doloribus aliquid blanditiis aut distinctio omnis iusto officia commodi minima necessitatibus, eum unde minus corrupti praesentium temporibus id? Inventore iusto illo, accusamus dolor voluptatem cupiditate vero earum officiis harum dignissimos voluptas natus commodi itaque totam omnis incidunt accusantium eligendi iure rerum et? Recusandae error quisquam suscipit quam a asperiores impedit illo iusto unde repellendus aliquid pariatur veniam, amet eum ab voluptatum inventore. Perspiciatis sint ut quia asperiores molestiae quam minus vitae laudantium sapiente atque, numquam dolorem quidem, ab officia eligendi quibusdam!</p>
            </div>
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

        </section>

        
    </main>

    <?php 
        incluirTemplate('footer');
    ?>

  