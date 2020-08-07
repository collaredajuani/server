<?php
  $conexion=mysqli_connect('localhost','root','','servidores1');
  session_start();
  unset($_SESSION['compra']);
  ?>
<!DOCTYPE html>
<html>
  <head>  
    <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" href="../css/comprar.css">
<script type="text/javascript" src="../js/comprar2.js"></script>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/menuClick2.css">
    <script src="../js/admin.js"></script>
  </head>
    <body clase="quecuerpaso">

<nav class="menu">
  <ul id="ulNav">
    <li id="liNav"><a id="nav" href="index(login).php">inicio</a></li>
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
      <a id="Amenu" name='adm' href="administrador.php"><li>Administrar</li></a>
    </ul>
  </div>
  <script type="text/javascript">admin();</script>
    	<!-- Aca terminan los menu -->

      <div class="listaServidores">
        <div class="encabezado">
          <div class="dueEncabezado">
            <span> Precio </span>
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
            <span> Agregar </span>
          </div>

          </div>
<?php
$sql="SELECT * from servidor";
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
          <div class="preCaracteristicas">
            <?php echo "<span>".$mostrar['precio']."$ pesos(arg)</span>";?>
          </div>
          <div class="cpuCaracteristicas">
             <?php echo "<span>".$mostrar['cpu']."</span>";?>
          </div>
          <div class="ramCaracteristicas">
            <?php echo "<span>".$mostrar['ram']."gb</span>";?>
          </div>
          <div class="almCaracteristicas">
             <?php echo "<span>".$mostrar['alamacenamiento']."gb</span>";?>
          </div>
          <div class="velCaracteristicas">
            <?php echo "<span>".$mostrar['velocidad']."mbps</span>";?>
          </div>
          <div class="inpCaracteristicas" onclick="agregarAlCarrito(<?= $i ?>)";>
            <img src="carrito.png"width="40" height="40"/>
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
          <div class="preCaracteristicas">
            <?php echo "<span>".$mostrar['precio']."$ pesos(arg)</span>";?>
          </div>
          <div class="cpuCaracteristicas">
             <?php echo "<span>".$mostrar['cpu']."</span>";?>
          </div>
          <div class="ramCaracteristicas">
            <?php echo "<span>".$mostrar['ram']."gb</span>";?>
          </div>
          <div class="almCaracteristicas">
             <?php echo "<span>".$mostrar['alamacenamiento']."gb</span>";?>
          </div>
          <div class="velCaracteristicas">
            <?php echo "<span>".$mostrar['velocidad']."mbps</span>";?>
          </div>
          <div class="inpCaracteristicas" onclick="agregarAlCarrito(<?= $i ?>)";>
            <img src="carrito.png"width="40" height="40"/>
          </div>
      </div>
      <?php
      }
    $i++;
    }
    ?>
          

        

        <div class="carrito" id="carrito">
                <div class ="titulos">
                <span>ID </span> <span> Precio </span> <span> total </span> <span id="tot">0</span>
                </div>
                </div>

            <div class="concretar">
            <a href="#" class="btnConcretar"  onclick="openForm()";>Alquilar </a>
          </div>
      </div>

 <div class="formTarjeta" id="formTarjeta">
        <form method="post" action="../php/confirmaCompra.php">
        <h1>Tarjeta</h1>
        <p>Por favor, rellene el formulario. (Solo se acepta tarjeta VISA)</p>
        <span id="textoApellido"> Fecha de Vencimiento de la tarjeta: </span>
        <input name='fecha' type="date" min="2020-09-01">
        <span id="textoNumero"> Numero de Tarjeta: </span>
        <input type ="text" id="numeroTarjeta" name='numeroTarjeta' placeholder="Ingresar..."  class="blanco" onblur="validarNumeroTarjeta(this.id);" />
        <span id="textoCVV"> CVV: </span>
        <input type ="text" id="codigoCVV" name='cvv' placeholder="Ingresar..." class="blanco" onblur="validarCVV(this.id)";/>
        <input type ="submit" id="submit" value="aceptar" ; />
        <input type ="button" id="cancelar" value="cancelar" onclick="closeForm();"/>
      </form>
      </div>



</body>
