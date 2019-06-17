<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b></h1><br>
        <h2>O status atual do seus brinde é : <?php if(($_SESSION["status"]) == 1){echo "Disponível";}else if(($_SESSION["status"]) == 0){echo "Indisponível";} ?></h2>
    </div>
    <p>
        <a href="ativa.php" class="btn btn-success">Ativar Brindes</a>
        <a href="desativa.php" class="btn btn-danger">Desativar Brindes</a><br><br>
        <a href="logout.php" class="btn btn-warning">Sair</a>
    </p>
</body>
</html>
