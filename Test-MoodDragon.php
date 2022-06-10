<!DOCTYPE html>
<html>
<head>
<title>MoodDragon</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/mystyle-mooddragon.css?v=<?php echo time(); ?>">
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://i.imgur.com/JdMI35J.png" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>INICIO</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ACERCA DE NOSOTROS</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>GALERÍA</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTÁCTENOS</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">INICIO</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ACERCA DE NOSOTROS</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">GALERÍA</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTÁCTENOS</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Mood</span> Dragon</h1>
    <p>Diseño web y soluciones tecnológicas </p>
    <img src="https://i.imgur.com/JdMI35J.png" alt="boy" class="w3-image" width="500" height="600">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Quiénes Somos</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Desde el año 2017 hemos trabajado con varias compañías con el fin de aumentar el alcance de su publicidad y por consiguiente sus clientes.
        Durante el año 2018-2019 tuvimos la oportunidad de trabajar con un Outsourcing que presta servicios a compañías como Google en el área de soporte técnico de sus plataformas G Suite.
        Este año, Mood Dragon tiene como  objetivo aumentar el portafolio de servicios y así mismo abarcar un mercado de medianas y grandes empresas con el fin de ser el puente entre los negocios y los clientes  por medio del uso de las herramientas digitales. 
        
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">Competencias</h3>
    <p class="w3-wide">Administración de DNS</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Diseño Web</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:85%"></div>
    </div>
    <p class="w3-wide">Soporte Técino y mantenimiento</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">6+</span><br>
        Socios
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Poyectos realizados
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">100%</span><br>
        Clientes Satisfechos
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">50+</span><br>
        Reuniones
      </div>
    </div>

   
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Nuestros Servicios</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Básicos</li>
          <li class="w3-padding-16">Diseño Web</li>
          <li class="w3-padding-16">Administración de DNS</li>
          <li class="w3-padding-16">Soporte técnico</li>
          <li class="w3-padding-16">Soporte de Email corporativo</li>
          <li class="w3-light-grey w3-padding-24">
            <button onclick="window.location.href='#contact'" class="w3-button w3-white w3-padding-large w3-hover-black">Más información</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Profesionales</li>
          <li class="w3-padding-16">Diseño Web y soporte técnico</li>
          <li class="w3-padding-16">Administración de DNS</li>
          <li class="w3-padding-16">Administración de bases de datos</li>
          <li class="w3-padding-16">Soporte de Email corporativo</li>
          <li class="w3-light-grey w3-padding-24">
            <button onclick="window.location.href='#contact'" class="w3-button w3-white w3-padding-large w3-hover-black">Más información</button>
          </li>
        </ul>
      </div>

  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Galeria</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="https://i.imgur.com/Pf3feu4.jpeg" style="width:100%">
        <img src="https://i.imgur.com/1H0sOqK.jpeg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="https://kinsta.com/wp-content/uploads/2018/02/g-suite-admin-console.png" style="width:100%">
        <img src="https://lh3.googleusercontent.com/4tYJkV3JBrlPIbN1DiHRLSl7FoQL80LX-51URHrqIUsxt7YikaTcDIUeu1f02hLrd-g=w900-rwa" style="width:100%">
        <img src="https://innovandodigital.com/wp-content/uploads/2019/09/gsuiteblog.png" style="width:100%">
        <img src="https://images.sftcdn.net/images/t_app-cover-l,f_auto/p/917c77e8-96d1-11e6-8453-00163ed833e7/562821159/mysql-com-screenshot.png" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contáctenos</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Bogotá, Colombia</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Teléfono: +57 321 495 8963</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mooddragon@mail.com</p>
    </div><br>
    <p>Envíanos un mensaje</p>

    <form method="POST" id="login">

      <input class="w3-input w3-padding-16" type="text" placeholder="Nombre" name="Nombre">
      <input class="w3-input w3-padding-16" type="text" placeholder="Email" name="Email">
      <input class="w3-input w3-padding-16" type="text" placeholder="Asunto" name="Asunto">
      <input class="w3-input w3-padding-16" type="text" placeholder="Mensaje" name="Mensaje">
      
        <button name="login" class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> ENVIAR MENSAJE
        </button>
       
    </form>

    <?php
      $servername = "localhost:3306";
      $db = "users";
      $user = "ro_user";
      $password = "Isabella1!";

      if(isset($_POST['login'])) {  
        $name = $_POST['Nombre'];
        $email = $_POST['Email'];
        $subject= $_POST['Asunto'];
        $message= $_POST['Mensaje'];
        try {
          $dsn = "mysql:host=$servername;dbname=$db";
          $pdo = new PDO($dsn, $user, $password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          
          if($pdo) {
            
            $sql = "INSERT INTO website_form (name, email, subject, message) VALUES('".$name."', '".$email."', '".$subject."', '".$message."')";
          if ($pdo->query($sql)) {
              echo "Su mensaje ha sido enviado, nos contactaremos pronto con usted!";
              }
          else {
              echo "Mensaje no enviado";
            }
          }
        } 
        catch(Exception $e) {
          echo "Error de conexión";
        }
      }
    ?> 
         

  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"><a href="https://www.linkedin.com/in/melissaalher/" target="_blank"</a></i>
    <p class="w3-medium">MoodDragon &copy; <a href="https://www.linkedin.com/in/melissaalher/" target="_blank" class="w3-hover-text-green">Todos los derechos reservados 2022</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
