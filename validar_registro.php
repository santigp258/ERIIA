<?php if(isset($_POST['submit'])): //revisa que  la variable exista 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $ocupacion = $_POST['ocupacion'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $tyc = $_POST['tyc'];
    try{ //statement ayuda a prevenir SQL INJECTION
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO Registrados (nombre_registrado, apellido_registrado, email_registrado, telefono_registrado, ocupacion_registrado, departamento_registrado, ciudad_registrado, direccion_registrado, tyc) VALUES (?,?,?,?,?,?,?,?,?) ");
        $stmt->bind_param("sssssssss", $nombre, $apellido, $email, $telefono, $ocupacion, $departamento, $ciudad, $direccion, $tyc);
        $stmt->execute();
        $stmt->close();
        header('Location: validar_registro.php?exitoso=1');
        $conn->close();
    } catch(\Exception $e){
            echo $e->getMessage();
    }
    ?>

<?php endif; ?>

<?php   include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Resumen Registro</h2>

    <?php if(isset($_GET['exitoso'])): 
        
        if($_GET['exitoso'] = "1"):
            echo "Registro Exitoso";
        endif;
    endif;  ?>



    </section>

<?php   include_once 'includes/templates/footer.php'; ?>
