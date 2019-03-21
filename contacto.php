<!doctype html>
<html lang="es">
  <head>
   
      <!-- inicio del header-->
      <?php include 'includes/head.php';?>
      <!-- fin dek heades-->

    <title>Contactos- Capacit- Programacion web!</title>
  </head>
  <body>

          <!-- inicio del header-->
          <?php include 'includes/header.php';?>
          <!-- fin dek heades-->

   <main>
<section>
  <div class="container">
    <div class="col-md-12"> 
     
    </div>
 

  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12 titulo-seccion">
        <h2>Contacto</h2>
        <hr>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-3">
        <h2>Informaciones</h2>
        <div class="media">

 <i class="material-icons">
email
</i>
  <div class="media-body">
    <h5 class="mt-0">Email</h5>
    lizarmoa10@gmail.com
  </div>
</div>

<hr>
<div class="media">
<i class="material-icons">
phone_in_talk
</i>
  <div class="media-body">
    <h5 class="mt-0">Telefono</h5>
    063124234  </div>
</div>

<hr>
<div class="media">
 <i class="material-icons">
add_location
</i>
  <div class="media-body">
    <h5 class="mt-0">Direccion</h5>
    Avda San Blas km 3 1/2
  </div>
</div>

      </div>

      <div class="col-md-9">
        <h2>Formulario</h2>

        <form method="GET" action="">
          <label>Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
        

          <label>Email</label>
          <input type="email" name="email" class="form-control" required>
        

          <label>Telefono</label>
          <input type="text" name="telefono" class="form-control" required>
        
          <label>Asunto</label>
          <input type="text" name="asunto" class="form-control" required>
          <label>Mensaje</label>
          <textarea class="form-control" cols="30" rows="10" name="Mensaje" required> </textarea>
          <br>
          <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
        </form>


      </div>
    </div>
    
  </div>
   </div>
</section>

<section>
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14403.479553783354!2d-54.6295968!3d-25.5093855!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb12fbfc9747b41e3!2sCapacit!5e0!3m2!1ses!2spy!4v1552603383131" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  

</section>




</div>

     


   </main>
     
   <!-- inicio del footer-->
          <?php include 'includes/footer.php';?>
          <!-- fin dek footer-->

    

   
   
   <!-- inicio del script-->
          <?php include 'includes/script.php';?>
          <!-- fin dek script-->
  </body>
</html>