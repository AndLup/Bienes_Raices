<?php 
    include 'includes/templates/header.php';
?>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Contacto</h1>

        <picture>
            <source src="build/img/destacada3.webp" type="img/webp">
            <source src="build/img/destacada3.jpg" type="img/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
        </picture>

        <h2>Formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>

                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Nombre">
                
                <label for="email">E-mail</label>
                <input id="email" type="email" placeholder="Email">
                
                <label for="tel">Teléfono</label>
                <input id="tel" type="tel" placeholder="Teléfono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje">mensaje</textarea>
            </fieldset>

            <fieldset>
                <legend>Información de Propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Selecciona</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input id="presupuesto" type="number" placeholder="Precio o Presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>¿Cómo deseas ser contactado?</p>

                <div class="forma-contacto">
                    <label id="contactar-tel" for="contactar-tel">Teléfono</label>
                    <input name="contacto" type="radio" value="Teléfono">
                    
                    <label id="contactar-mail" for="contactar-mail">E-mail</label>
                    <input name="contacto" type="radio" value="Email">
                </div>
               
                <p>Elija fecha y hora para ser contactado</p>

                <label  for="fecha">Fecha: </label>
                <input id="fecha" type="date">
                    
                <label for="contactar-mail">Hora: </label>
                <input id="hora" type="time" min="09:00" max="18:00">
            </fieldset>

            <input class="boton-verde" type="submit" value="Enviar" id="btnEnviar">
        </form>
    </main>
    <?php include 'includes/templates/footer.php'; ?>

  