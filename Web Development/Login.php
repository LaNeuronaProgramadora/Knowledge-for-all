<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Iron Man Login Form CSS Version</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<script language="javascript">alert(" fallo");</script>'; 
        // Verificar las credenciales
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        // Credenciales válidas (usuario: jose, contraseña: 12345)
        if ($usuario === "Fernando1234" && $contrasena === "Chirilord") {
            // Redireccionar a la página d  e index.php
            header("Location:indexx.php");
            exit();
        } else {
            // Mensaje de error si las credenciales son incorrectas
            echo "<p style='color: red;'>Usuario o contraseña incorrectos.</p>";
        }
    }
    ?>

<div id="logo"> 
  <h1><i> CHIRILORD3000</i></h1>
</div> 
<section class="stark-login">
  
<form action="" method="post">	
    <div id="fade-box">
        <h2 style="color: white; font-size: 15px;">Login</h2>
        <label for="username" style="color: white; font-size: 13px;">USERNAME:</label>
        <input type="text" id="username" name="usuario" placeholder="Username" required>
        
        <label for="password" style="color: white; font-size: 13px;">PASSWORD:</label>
        <input type="password" id="password" name="contrasena" placeholder="Password" required>
          
        <button type="submit">Iniciar Sesión</button> 
    </div>
</form>

      <div class="hexagons">
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <span>&#x2B22;</span>
        <br>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <span>&#x2B22;</span>
          <br>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span> 
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            <span>&#x2B22;</span>
            
            <br>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <span>&#x2B22;</span>
              <br>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
                <span>&#x2B22;</span>
              </div>      
            </section> 
            
            <div id="circle1">
              <div id="inner-cirlce1">
                <h2> </h2>
              </div>
            </div>
            
            
            
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
<!-- partial -->
  
</body>
</html>
