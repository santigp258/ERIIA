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
             <nav class="menu-programa">
               <a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
               <a href="#conferencias"><i class="fas fa-comment"></i></i> Conferencias</a>
               <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>

             </nav>

             <div id="talleres" class="info-curso ocultar clearfix">

              <div class="detalle-evento">
                <h3>HTML, CSS3 y JavaScript</h3>
                <p><i class="far fa-clock"></i> 16:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i> 10 de dic</p>
              <p><i class="far fa-user"></i> Santiago Guerrero</p>
              </div> <!--primer evento-->
              <div class="detalle-evento">
                <h3>Responsive Web Design</h3>
                <p><i class="far fa-clock"></i> 20:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i> 10 de dic</p>
              <p><i class="far fa-user"></i> Santiago Guerrero</p>
              </div> <!--segundo evento-->
    
                <a href="#" class="button float-right">Ver todos</a>

             </div> <!--talleres-->

             <div id="conferencias" class="info-curso ocultar clearfix">

              <div class="detalle-evento">
                <h3>Cómo ser freelancer</h3>
                <p><i class="far fa-clock"></i> 10:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i> 10 de dic</p>
              <p><i class="far fa-user"></i> Mauricio Ramirez</p>
              </div> <!--primer evento-->
              <div class="detalle-evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="far fa-clock"></i> 17:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i> 10 de dic</p>
              <p><i class="far fa-user"></i> Susan Sanchez</p>
              </div> <!--segundo evento-->
    
                <a href="#" class="button float-right">Ver todos</a>

             </div> <!--talleres-->

             <div id="seminarios" class="info-curso ocultar clearfix">

              <div class="detalle-evento">
                <h3>Diseños UI/UX para móviles</h3>
                <p><i class="far fa-clock"></i> 17:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i> 11 de dic</p>
              <p><i class="far fa-user"></i> Harold Garcia</p>
              </div> <!--primer evento-->
              <div class="detalle-evento">
                <h3>Aprende a programar en una mañana</h3>
                <p><i class="far fa-clock"></i> 10:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i> 11 de dic</p>
              <p><i class="far fa-user"></i> Susana Rivera</p>
              </div> <!--segundo evento-->
    
                <a href="#" class="button float-right">Ver todos</a>

             </div> <!--talleres-->

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