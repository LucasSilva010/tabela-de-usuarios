<?php
if(!empty($_GET['id'])) {

  include_once('../connection.php');

  $id = $_GET['id'];

  if(isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    $sqlDelete = "DELETE FROM usuarios WHERE id='$id'";
    $result = $conn->query($sqlDelete);
  } else {
    // Se o parâmetro "confirmar" não estiver definido ou estiver definido como 'false', redireciona de volta à lista de usuários
    header("Location: ../views/users.php");
    exit(); // Encerra a execução do script após o redirecionamento
  }
}
header("Location: ../views/users.php")
?>