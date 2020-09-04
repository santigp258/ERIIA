
<?php   include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
    <h2>Calendario De Eventos</h2>

  <?php   
  // Si hay un error de conexión a la base de datos, permitir que la página siga funcionando
  try{
      require_once('includes/funciones/bd_conexion.php');
      $sql= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
      $sql .= " FROM eventos ";
      $sql .=" INNER JOIN categoria_evento ";
      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
      $sql .= " INNER JOIN invitados ";
      $sql .= " ON eventos.id_inv = invitados.invitado_id ";
      $sql .= " ORDER BY evento_id ";

      $resultado= $conn->query($sql);
  } catch(\Exception $e){
          $error = $e->getMessage();
  }
  

  ?>

  <div class="calendario">
  
  <?php    
  $calendario = array();
  while($eventos = $resultado->fetch_assoc()){ 
        
      //obtiene la fecha del evento
      $fecha = $eventos['fecha_evento'];

      $evento = array(
          'titulo' => $eventos['nombre_evento'],
          'fecha' => $eventos['fecha_evento'],
          'hora' => $eventos['hora_evento'],
          'categoria' => $eventos['cat_evento'],
          'icono' => 'fa' . " " . $eventos['icono'],
          'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
      );

      $calendario[$fecha][] = $evento;
      ?>
          

      
      
  
  <?php } //while de fetch_assoc()?>


  <?php 
  //imprime todos los arreglos
  
      foreach($calendario as $dia=> $lista_eventos){ ?>

          <h3>
              <i class="fa fa-calendar">
              
              <?php  
               ///Unix
               setlocale(LC_TIME, 'es_ES.UTF-8');
               //Windows
               setlocale(LC_TIME, 'spanish');
               
               echo strftime("%A, %d de %B del %Y", strtotime($dia));
               
              //echo date(" F j, Y", strtotime($dia));?>
                  </i>
          </h3> 

          <?php  foreach($lista_eventos as $evento){  ?>

              <div class="dia">
                  <p class="titulo"><?php  echo $evento['titulo']; ?></p>
                  <p class="hora">
                      <i class="far fa-clock" aria-hidden="true"></i>
                  <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                  </p>
                  <p>
                  <i class="<?php echo $evento['icono']; ?>" aria-hidden="true"></i>
                      <?php  echo $evento['categoria']; ?>
              
                  </p>
                  <p>
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <?php  echo $evento['invitado']; ?>
                  </p>   
              </div>
                  

          <?php  }  //fin foreach eventos?> 

       <?php  }  //fin foreach de días ?>
 
   </div>   <!--calendario -->

   <pre>
              <?php // var_dump($eventos);  ?> 
   
   </pre>

<?php 
  $conn->close();
?>

</section>





<?php   include_once 'includes/templates/footer.php'; ?>
