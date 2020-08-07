<!DOCTYPE html>
<html>
  <head>
<?php
$conexion=mysqli_connect('localhost','root','','servidores1');
  session_start();
  unset($_SESSION['compra']);
  $mail=$_SESSION['email'];
?>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/comprar.css?v1.1">
<link rel="stylesheet" type="text/css" href="../css/administrador.css">
<script type="text/javascript" src="../js/administrador.js"></script>
<script type="text/javascript" src="../js/onchange.js"></script>
<script type="text/javascript" src="../js/encendido.js"></script>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../css/menuClick2.css">
  </head>
    <body clase="quecuerpaso">
<nav class="menu">
  <ul id="ulNav">
    <li id="liNav"><a id="nav" href="index(login).php"><b>Inicio</b></a></li>
    <li id="liNav"><a id="nav" href="sobreNossotros.php">Sobre  nosotros</a></li>
    <li id="liNav"><a id="nav" href="contacto.php">Contacto</a></li>
  </ul>
</nav>

<div id="menuDesplegable">

    <input type="checkbox" />


    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
      <a id="Amenu" href="comprar2.php"><li>Comprar</li></a>
      <a id="Amenu" href="user.php"><li>Cuenta</li></a>
      <a id="Amenu" href="administrador.php"><li>Administrar</li></a>
    </ul>
  </div>

  <h1 id="titAdmin"> Administrador<select name="customers" id="showCustomer" onchange="Startsession2( );"></select></h1>
  <script type="text/javascript">showCustomer2( );</script>

  <div class="listaServidores">
    <div class="encabezado">
      <div class="tipoEncabezado">
        <span> Email </span>
      </div>
      <div class="cpuEncabezado">
        <span> CPU </span>
      </div>
      <div class="ramEncabezado">
        <span> RAM </span>
      </div>
      <div class="almEncabezado">
        <span> Almacenamiento </span>
      </div>
      <div class="velEncabezado">
        <span> Velocidad de conexion </span>
      </div>
      <div class="agrEncabezado">
        <span> Apagar/encender </span>
      </div>

      </div>
<?php
/*SELECT * FROM compra INNER JOIN servidor ON servidor.id_servidor=compra.id_servidor WHERE EMAIL="lordjuanic@gmail.com"*/

$sql="SELECT * FROM servidor INNER JOIN compra ON servidor.id_servidor=compra.id_servidor;";

$result=mysqli_query($conexion,$sql);
$i=0;
while($mostrar=mysqli_fetch_array($result)){

  if($mostrar['id_servidor']%2==0)
  {
    ?>
    <div class="caracteristicasTA">
            <div class= "idCaracteristicas">
              <?php echo "<span class='idCara'>".$mostrar['id_servidor']." </span>"; ?>
            </div>
           <div class="nomCaracteristicas">
            <?php echo "<span >".$mostrar['Email']." </span>";?>
          </div>
         
          <div class="cpuCaracteristicas">
             <?php echo "<span>   ".$mostrar['cpu']."</span>";?>
          </div>
          <div class="ramCaracteristicas">
            <?php echo "<span>".$mostrar['ram']."gb</span>";?>
          </div>
          <div class="almCaracteristicas">
             <?php echo "<span>".$mostrar['alamacenamiento']."</span>";?>
          </div>
          <div class="velCaracteristicas">
            <?php echo "<span>".$mostrar['velocidad']."</span>";?>
          </div>
          <div class="encCaracteristicas" onclick="encendido(<?=$mostrar['id_servidor']?>,'<?=$mostrar['Encendido']?>')">
            <?php echo "<span>".$mostrar['Encendido']."</span>";?>
          </div>
      </div>
      <?php
}
      else if($mostrar['id_servidor']%2==1)
      {
        ?>
        <div class="caracteristicasTB">
         <div class= "idCaracteristicas">
              <?php echo "<span class='idCara'>".$mostrar['id_servidor']." </span>"; ?>
         </div>
          <div class="nomCaracteristicas">
            <?php echo "<span ".$mostrar['id_servidor'].">".$mostrar['Email']."</span>";?>
          </div>
          <div class="cpuCaracteristicas">
             <?php echo "<span>".$mostrar['cpu']."</span>";?>
          </div>
          <div class="ramCaracteristicas">
            <?php echo "<span>".$mostrar['ram']."gb</span>";?>
          </div>
          <div class="almCaracteristicas">
             <?php echo "<span>".$mostrar['alamacenamiento']."</span>";?>
          </div>
          <div class="velCaracteristicas">
            <?php echo "<span>".$mostrar['velocidad']."</span>";?>
          </div>
          <div class="encCaracteristicas" onclick="encendido(<?=$mostrar['id_servidor']?>,'<?=$mostrar['Encendido']?>')">
            <?php echo "<span>".$mostrar['Encendido']."</span>";?>
          </div>
      </div>
      <?php
      }
      $i++;
    }
    ?>
    <div id="mensaje">
    <form method="POST"  action="../php/feed.php">
    <textarea id="texto" name="texto"></textarea>
    <button type="submit" class="btn" on>Send</button>
</form>
</div>
</div>
</body>
</html>
