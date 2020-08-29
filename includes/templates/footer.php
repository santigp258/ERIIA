
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


</div>  <!--twwets-->
   
<div class="menu">
 <h3>Redes<span>Sociales</span></h3>
 <nav class="redes-sociales">
   <a href="#"><i class="fab fa-facebook-f"></i></a>
   <a href="#"><i class="fab fa-twitter"></i></a>
   <a href="#"><i class="fab fa-instagram"></i></a>
</nav>
</div>

</div> <!--contenedor-->

<p class="copyright">
 Todos los derechos reservados proyecto 2020 
</p>

</footer>

 <script src="js/vendor/modernizr-3.11.2.min.js"></script>
 <script src="js/plugins.js"></script>
 <script src="js/leaflet.js"></script>
 <script src="js/map.js"></script>
 <script src="jquery.js"></script>
 <script src="js/jquery.animateNumber.js"></script>
 <script src="js/jquery.countdown.js"></script>
 <script src="js/jquery.lettering.js"></script>
 <?php     
    $archivo = basename($_SERVER['PHP_SELF']); //retorna el nombre del archivo actual
    $pagina = str_replace(".php", "", $archivo);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/jquery.colorbox-min.js"></script>'; 
      echo '<script src="js/jquery.waypoints.min.js"></script>';
    } 
  
  ?>
 <script src="js/main.js"></script>
 <script src="js/menu.js"></script>
 
 


</body>

</html>