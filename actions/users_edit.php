<?php
// Conexão com o DB MySql
include_once('../connection.php');

// Verificação de se houve algum update
if(isset($_POST['update'])) {
  // Coletando os dados através do post
  $id = $_POST['id'];
  $name = $_POST['nameInput'];
  $email = $_POST['emailInput'];
  $funcao = $_POST['functionInput'];

  // Script sql para a atualizaçao dos dados
  $sqlUpdate = "UPDATE usuarios SET nome='$name', email='$email', funcao='$funcao' WHERE id='$id'";
  // Implementação do script através da conexão com o DB
  $result = $conn->query($sqlUpdate);
} else {
  // Em caso de algum erro, retorna para a página principal.
  header("Location: ../views/users.php");
}
// Retorna para a página principal.
header("Location: ../views/users.php");

?>