<?php   include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>La mejor conferencia de diseño web en español</h2>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae culpa provident voluptatem reiciendis quae animi enim reprehenderit veniam ullam ipsa laudantium
     fugiat aut sapiente fugit architecto assumenda, nemo harum quas!</p>
</section> <!--seccion-->

<section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
      </video>
    </div> <!--contenedor-video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">

             <h2>Programa del evento</h2>
             <?php
            try{
        require_once('includes/funciones/bd_conexion.php');
          $sql= "SELECT * FROM `categoria_evento`; ";
          $resultado= $conn->query($sql);
           } catch(\Exception $e){
            $error = $e->getMessage();
            }
  
          ?>

                  <nav class="menu-programa">
               <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                <?php $categoria = $cat['cat_evento']; ?>
               <a href="#<?php echo strtolower($categoria); ?>">
               <i class="fas <?php echo $cat['icono']; ?>"></i> <?php echo $categoria?></a>
               <?php } ?>
             </nav>

             <?php   
        try{
        require_once('includes/funciones/bd_conexion.php');
        $sql  = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " AND eventos.id_cat_evento = 1 ";
        $sql .= " ORDER BY evento_id LIMIT 2;";
     } catch(\Exception $e){
             echo $e->getMessage();
     }
       ?>
      <?php  $conn->multi_query($sql);?>

      <?php

      do{
            $resultado = $conn->store_result();
            $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

            <?php $i = 0; ?>
            <?php  foreach($row as $evento): ?>
              <?php if($i % 2 == 0){ ?>
            <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
            <?php  } ?>

            <div class="detalle-evento">
              <h3><?php echo $evento['nombre_evento'] ?></h3>
              <p><i class="far fa-clock"></i> <?php echo $evento['hora_evento']; ?></p>
            <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
            <p><i class="far fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
            </div> <!--primer evento-->
  
              
              <?php if($i % 2 == 1): ?>
                <a href="calendario.php" class="button float-right">Ver todos</a>
           </div> <!--talleres-->
              <?php  endif; ?>
           <?php  $i++; ?>
       <?php  endforeach; ?>
       <?php $resultado->free(); ?>
  <?php  } while($conn->more_results() && $conn->next_result()); ?>

        </div> <!--programa-evento-->

      </div> <!--contenedor--->
    </div> <!---contenido-programa-->

</section> <!--programa-->
<?php   include_once 'includes/templates/invitados.php'; ?>
<div class="contador parallax">
  <div class="contenedor"> 

    <ul class="resumen-evento clearfix">
      <li><p class="numero"></p> Invitados</li>
      <li><p class="numero"></p> Talleres<li>
      <li><p class="numero"></p> Días</li>
      <li><p class="numero"></p> Conferencias</li>
    </ul>
    
  </div> <!--contenedor-->
  </div> <!--parallax-->

  

<section class="seccion">
  <h2>Testimoniales</h2>
<div class="testimoniales contenedor clearfix">

  <div class="testimonial">
    <blockquote>
      <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus 
        magni laborum corporis. Accusamus aliquam, minima, modi, quo dol
        or fugit nam quidem quae atque voluptas amet distinctio aperiam 
        suscipit at magnam.</p>
        
       <footer class="info-testimonial clearfix">

        <img src="img/testimonial.jpg" alt="testimonial">

        <cite>Santiago Guerrero <span>Diseñador</span></cite>

       </footer> 
    </blockquote>
  </div>   <!--testimonial-->

  <div class="testimonial">
    <blockquote>
      <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus 
        magni laborum corporis. Accusamus aliquam, minima, modi, quo dol
        or fugit nam quidem quae atque voluptas amet distinctio aperiam 
        suscipit at magnam.</p>
        
       <footer class="info-testimonial clearfix" >

        <img src="img/testimonial.jpg" alt="testimonial">

        <cite>Santiago Guerrero <span>Diseñador</span></cite>

       </footer> 
    </blockquote>
  </div>   <!--testimonial-->

  <div class="testimonial">
    <blockquote>
      <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus 
        magni laborum corporis. Accusamus aliquam, minima, modi, quo dol
        or fugit nam quidem quae atque voluptas amet distinctio aperiam 
        suscipit at magnam.</p>
        
       <footer class="info-testimonial clearfix">

        <img src="img/testimonial.jpg" alt="testimonial">

        <cite>Santiago Guerrero <span>Diseñador</span></cite>

       </footer> 
    </blockquote>
  </div>   <!--testimonial-->
</div> <!--testimoniales-->
</section>


  <div class="newsletter parallax">
    <div class="contenido contenedor">

      <p> Regístrate a la conferencia</p>
      <h3>ERIIA</h3>
      <a href="#" class="button transparente">Registro</a>
      
    </div> <!--contenido-->
  </div> <!--newsletter-->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
         <li><p id="dias" class="numero"></p> días</li>
         <li><p id="horas" class="numero"></p> horas</li>
         <li><p id="minutos" class="numero"></p> minutos</li>
         <li><p id="segundos" class="numero"></p> segundos</li>
    </ul>
  </div>   <!--seccion-->
</section>


<?php   include_once 'includes/templates/footer.php'; ?>