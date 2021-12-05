<?php

    //Base de datos
    require '../../includes/config/database.php';

    $db = conectarDB();

     //ARREGLO DE VALIDACION
        $errores = [];

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
        
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    $estacionamiento = $_POST['estacionamiento'];
    $vendedorId = $_POST['vendedor'];

    if(!$titulo){
        $errores[] = "Debes añadir un titulo";
    }

    if(!$precio){
        $errores[] = "El Precio es obligatorio";
    }

    if(strlen($descripcion) > 30){
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

    //REVISAR ARRAY DE ERRORES ESTÈ VACÌO
    if(empty($errores)){

                //Insertar Query
                $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId)
                VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId' )";
            //echo $query;
        
            $resultado = mysqli_query($db, $query);
                if($resultado){
                    echo 'Insertado correctamente';
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
            foreach($errores as $error);
        ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Informacion General</legend>

                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen"  accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion</label>
                <textarea id="descripcion" name="descripcion" cols="30" rows="10"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ejemplo: 3" min="1" max="8">

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ejemplo: 2" min="1" max="8">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejemplo: 1" min="1" max="8" value="<?php echo $titulo ?>">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor">
                    <option value="">Selecciona un vendedor</option>
                    <option value="1">Andres</option>
                    <option value="2">Ana Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>