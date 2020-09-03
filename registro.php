<?php   include_once 'includes/templates/header.php'; ?>

<section class="seccion form">
<h2>Insríbete</h2>
<form id="registro" class="registro" action="validar_registro.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre(s)</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre(s)">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido(s)</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido(s)">
    </div>
  </div>
  <div class="form-row">
  	<div class="form-group col-md-6">
  	  <label for="email">Email</label>
  	  <input type="email" class="form-control" id="email" name="email" placeholder="correo@correo.com">
    </div>
    
  	<div class="form-group col-md-6">
  	  <label for="telefono">Número de teléfono</label>
  	  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="ingrese su número de teléfono">
  	</div>

  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label class="mdb-main-label">Ocupación</label>
      	<select id="ocupacion" name="ocupacion" class="browser-default custom-select">
      	    <option selected>--Seleccione--</option>
      	    <option value="est">Estudiante</option>
      	    <option value="pro">Profesor</option>
            <option value="par">Particular</option>
      	</select>
  </div>

    <div class="form-group col-md-6">
      <label class="mdb-main-label">Departamento</label>
      	<select id="departamento" name="departamento" class="browser-default custom-select">
      	    <option selected>--Seleccione--</option>
      	    <option value="ama">Amazonas</option>
      	    <option value="ant">Antioquía</option>
            <option value="ara">Arauca</option>
            <option value="atl">Atlántico</option>
            <option value="bol">Bolivar</option>
            <option value="boy">Boyacá</option>
            <option value="cal">Caldas</option>
            <option value="caq">Caquetá</option>
            <option value="cas">Casanare</option>
            <option value="cau">Cauca</option>
            <option value="ces">Cesar</option>
            <option value="choc">Chocó</option>
            <option value="cor">Córdoba</option>
            <option value="cun">Cundinamarca</option>
            <option value="gua">Guainía</option>
            <option value="guav">Guaviare</option>
            <option value="hui">Huila</option>
            <option value="guaj">La Guajira</option>
            <option value="mag">Magdalena</option>
            <option value="met">Meta</option>
            <option value="nar">Nariño</option>
            <option value="nsan">Norte de Santander</option>
            <option value="put">Putumayo</option>
            <option value="quin">Quindío</option>
            <option value="ris">Risaralda</option>
            <option value="andr">San Andrés y Providencia</option>
            <option value="san">Santander</option>
            <option value="suc">Sucre</option>
            <option value="tol">Tolima</option>
            <option value="val">Valle del Cauca</option>
            <option value="vau">Vaupés</option>
            <option value="vich">Vichada</option>
      	</select>
  </div>
    </div>

    <div class="form-row">

    <div class="form-group col-md-6">
      <label for="ciudad">Ciudad</label>
      <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
    </div>
  <div class="form-group col-md-6">
  <label for="direccion">Dirección </label>
  	<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su dirección">
  </div>

    </div>

  
  </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" name="tyc">
      <label class="form-check-label" for="gridCheck"> 
        
      &nbsp;Acepto los <a href="#">Términos y condiciones</a>
         
      </label> 
    </div>
    <br>

    
    <input type="submit" id="btnRegistro" class="button" name="submit" value="Enviar Inscripción"> 

         <div id="error"></div>
         </div> <!--datos_usuario-->
 </form>
  
</section>

<?php   include_once 'includes/templates/footer.php'; ?>