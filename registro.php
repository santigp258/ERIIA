<?php   include_once 'includes/templates/header.php'; ?>

<section class="seccion form">
<h2>Insríbete</h2>
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName">Nombre(s)</label>
      <input type="text" class="form-control" id="inputName" placeholder="Nombre(s)">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLastname">Apellido(s)</label>
      <input type="text" class="form-control" id="inputLastname" placeholder="Apellido(s)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="correo@correo.com">
  </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Acepto los <a href="#">Términos y condiciones</a>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>

         <div id="error"></div>
         </div> <!--datos_usuario-->
 </form>
  
</section>

<footer class="site-footer">

 <div class="contenedor clearfix">

<div class="footer-informacion">
<h3>Sobre <span>Univalle</span></h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores deserunt consequatur commodi dolorum sint, facilis, volu
  ptate asperiores repellat quae labore possimus 
  dignissimos eum autem, sed excepturi minima. Quidem, ad enim.</p>
</div> <!--footer informacion-->

<div class="ultimos-tweets">
  <h3>Últimos <span>tweets</span></h3>

<ul>

  <li>dolorum sint, facilis, volu
    ptate asperiores repellat quae labore possimus 
    dignissimos eum autem, sed excepturi minima. Quidem, ad enim</li>
  <li>dolorum sint, facilis, volu
      ptate asperiores repellat quae labore possimus 
      dignissimos eum autem, sed excepturi minima. Quidem, ad enim</li>
  <li>dolorum sint, facilis, volu
        ptate asperiores repellat quae labore possimus 
        dignissimos eum autem, sed excepturi minima. Quidem, ad enim</li>

</ul>


</div>  <!--tweets-->
    
<div class="menu">
  <h3>Redes<span>Sociales</span></h3>
  <nav class="redes-sociales">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-pinterest"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
</nav>
</div>

 </div> <!--contenedor-->

 <p class="copyright">
  Todos los derechos reservados proyecto 2020 
</p>

</footer>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
 
</body>

</html>

<?php   include_once 'includes/templates/footer.php'; ?>