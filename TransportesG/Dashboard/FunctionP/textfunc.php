<?php 

  include('conectar_utd.php');

  $id=$_POST['id'];
  $txt=$_POST['texto'];
  //$nom=$_POST['descripcion'];
  //$cat=$_POST['seccion'];
  // $ape=$_POST['apellidos'];

  $up=$conexion->query("UPDATE textos set texto='$txt' where id='$id'; ");

  if($up)
  echo "Registro act";
  else
  echo"act Fallido";
  
  echo"<script> location.href='../table.php' </script>";
   
  


?>