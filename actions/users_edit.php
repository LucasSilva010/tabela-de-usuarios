<?php
// Conexão com o DB MySql
include_once('../connection.php');

// Verificação de se houve algum update
if(isset($_POST['update'])) {

  // Coletando os dados através do post
  $id = $_POST['id'];
  $name = $_POST['nameInputEdit'];
  $email = $_POST['emailInputEdit'];
  $funcao = $_POST['functionInputEdit'];

  // Expressões regulares para validação de formulário
  $nomeRegex = '/^[a-zA-ZÀ-ÿ ]+$/'; // Permite apenas letras e espaços
  $emailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/'; // Verifica se o email tem um formato válido
  $functionRegex = '/^[a-zA-Z\s]+$/'; // Permite apenas letras e espaços

  // Valida, por expressões regulares, os daddos vindos do formulário
  if(!preg_match($nomeRegex, $name) || !preg_match($emailRegex, $email) || !preg_match($functionRegex, $funcao)) {
    echo "Por favor, verifique os campos do formulário e os preencha corretamente";
  } 
  // Verifica se as dados estão vazios
  elseif(empty($name) || empty($email) || empty($funcao)) {
    echo "Todos os campos devem ser preenchidos.";
  } 
  // Roda o código para o editar os dados de um registro de um usuário no banco de dados
  else {
    // Script sql para a atualizaçao dos dados
    $sqlUpdate = "UPDATE usuarios SET nome='$name', email='$email', funcao='$funcao' WHERE id='$id'";
    if($conn->query($sqlUpdate) === TRUE) {
      header("Location: ../views/users.php");
    } else {
      header("Location: ../views/users.php");;
    };
  }
} else {
  // Em caso de algum erro, retorna para a página principal.
  header("Location: ../views/users.php");
}
// Retorna para a página principal após implementar os dados.
header("Location: ../views/users.php");

?>