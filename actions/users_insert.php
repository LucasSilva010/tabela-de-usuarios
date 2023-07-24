<?php
// Verificação de se houve algum update
$name = $_POST['nameInput'];
$email = $_POST['emailInput'];
$function = $_POST['functionInput'];

// Conexão com o DB MySql
require_once('../connection.php'); 

// Expressões regulares para validação de formulário
$nomeRegex = '/^[a-zA-ZÀ-ÿ ]+$/'; // Permite apenas letras e espaços
$emailRegex = '/^[^\s@]+@[^\s@]+\.[^\s@]+$/'; // Verifica se o email tem um formato válido
$functionRegex = '/^[a-zA-Z\s]+$/'; // Permite apenas letras e espaços

// Valida, por expressões regulares, os valores vindos do formulário
if(!preg_match($nomeRegex, $name) || !preg_match($emailRegex, $email) || !preg_match($functionRegex, $function)) {
  echo "Por favor, verifique os campos do formulário e os preencha corretamente";
} 
// Verifica se as variáveis estão vazias
elseif(empty($name) || empty($email) || empty($function)) {
  echo "Todos os campos devem ser preenchidos.";
} 
// Roda o código para o registro de um novo usuário no banco de dados
else {
   // Script sql para a inserir os dados
   $sqlCreate = "INSERT INTO usuarios (nome, email, funcao) VALUES('$name', '$email', '$function')";
   if($conn->query($sqlCreate) === TRUE) {
    header("Location: ../views/users.php");
   } else {
   header("Location: ../views/users.php");;
   }
exit;
}
?>
