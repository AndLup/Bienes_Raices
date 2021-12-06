<?php

    //Base de datos
    require '../../includes/config/database.php';

    $db = conectarDB();

     //ARREGLO DE VALIDACION
        $errores = [];

        //CONSULTAR VENDEDORES
        $consulta = "SELECT * FROM vendedores";
        $resultado = mysqli_query($db, $consulta);
        

        $titulo ='';
        $precio ='';
        $descripcion ='';
        $habitaciones ='';
        $wc ='';
        $estacionamiento ='';
        $vendedorId ='';

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";
        
        echo "<pre>";
        var_dump($_FILES);
        echo "</pre>";

        
        
        
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedorId = mysqli_real_escape_string($db, $_POST['vendedor']);
    $creado = mysqli_real_escape_string($db, date('Y/m/d'));

    $imagen = $_FILES["imagen"];    
    

    if(!$titulo){
        $errores[] = "Debes añadir un titulo";
    }

    if(!$precio){
        $errores[] = "El Precio es obligatorio";
    }

    if(strlen($descripcion) < 30){
        $errores[] = "Debes añadir una descripción de al menos 30 palabras";
    }

    if(!$habitaciones){
        $errores[] = "Debes añadir el número de habitaciones";
    }

    if(!$wc){
        $errores[] = "Debes añadir el número de baños";
    }

    if(!$estacionamiento){
        $errores[] = "Debes añadir el número de estacionamientos";
    }

    if(!$vendedorId){
        $errores[] = "Selecciona un vendedor";
    }
    
    if(!$imagen['name'] || $imagen['error']){
        $errores[] = "La imagen es obligatoria";
    }

    //VALIDAR IMAGEN POR TAMAÑO
    $medida = 1000 * 1000;

    if($imagen['size'] > $medida){
        $errores[] = "La imagen es demasiado grande";
    }


    //REVISAR ARRAY DE ERRORES ESTÈ VACÌO
    if(empty($errores)){

        //SUBIR ARCHIVOS

        //Crear Carpeta
        $carpetaImagenes = '../../imagenes/' ;

        if(!is_dir(mkdir($carpetaImagenes))){
            mkdir($carpetaImagenes);
        }

        //GENERAR NOMBRE UNICO PARA IMAGENES
        $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

        //SUBIR IMAGENES
        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);


                //Insertar Query
                $query = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId)
                VALUES ( '$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId' )";
            //echo $query;
        
            $resultado = mysqli_query($db, $query);
                if($resultado){
                    //Redireccionar despues de insertar datos
                    header('Location: /admin');
                }
            }
        
    }



    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
    
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        
        <?php 
            $error = '';
            foreach($errores as $error);
        ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">
                
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png" >

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion" value="<?php echo $descripcion ?>"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejemplo: 3" min="1" max="8" value="<?php echo $habitaciones ?>">

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ejemplo: 2" min="1" max="8" value="<?php echo $wc ?>">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejemplo: 1" min="1" max="8" value="<?php echo $estacionamiento ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="<?php echo $vendedor['id']; ?>">Selecciona un vendedor</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado)) :  ?>
                        <option <?php echo $vendedorId === $vendedor['id'] ? 'selected': ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido'] ?></option>

                        <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>