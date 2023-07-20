<?php
$name = $_POST['nameInput'];
$email = $_POST['emailInput'];
$function = $_POST['functionInput'];
require_once('../connection.php'); 

$sqlCreate = "INSERT INTO usuarios (nome, email, funcao) VALUES('$name', '$email', '$function')";
   if($conn->query($sqlCreate) === TRUE) {
    header("Location: ../views/users.php");
   } else {
    $conn->error;
   }
exit;
?>
