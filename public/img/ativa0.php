<?php
$con = mysqli_connect('localhost', 'root', '', 'pascoavirtual');

if(mysqli_connect_errno()){
  echo "1: Falha na Conexão com Banco";
  exit();
}

session_start();
$status = $_SESSION["status"];
$username = $_SESSION["username"];

if($status == 1){
  header("location: welcome.php");
}else{
  $updatequery = "UPDATE shopping SET statusBrinde = 1 WHERE login='" . $username . "';";
  mysqli_query($con, $updatequery) or die("4: Erro na Query de Update");
  $_SESSION["status"] = 1;
  header("location: welcome.php");
}
 ?>
