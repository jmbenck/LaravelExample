<?php
$con = mysqli_connect('localhost', 'root', '', 'pascoavirtual');

if(mysqli_connect_errno()){
  echo "1: Falha na Conexão com Banco";
  exit();
}


$namecheckquery = "SELECT statusBrinde FROM shopping WHERE id= 1";
$namecheck = mysqli_query($con, $namecheckquery) or die("2: Erro na Query de busca");

if(mysqli_num_rows($namecheck) != 1){
  echo "3: Usuario não existe";
  exit();
}

$existinginfo = mysqli_fetch_assoc($namecheck);
$status = $existinginfo["statusBrinde"];

if($status == 1){
  echo "1";
}else if($status == 0) {
  echo "0";
}

 ?>
