<?php
// Script para coletar os dados e colocácolos como value nos inputs. 
if(!empty($_GET['id'])) {
  include_once('../connection.php');

  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

  $result = $conn->query($sqlSelect);

  if($result->num_rows > 0) {
    while($user_data = mysqli_fetch_assoc($result)) {
       $nome = $user_data['nome'];
       $email = $user_data['email'];
       $funcao = $user_data['funcao'];    
      }
  } else {
    // Caso o id da URL não exista, retorna para a página principal.
    header("Location: ./users.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário para editar usuário</title>

  <!-- Boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
</head>

<body style="height: 100vh;" class=" d-flex align-items-center justify-content-center">
  
<div class="container">
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-4">
      <!-- Formulário para editar dados de usuário -->
      <form id="updateForm" class="col-md-12" action="../actions/users_edit.php" method="post">
        <div class="form-group">
          <label for="nameInputEdit">Nome do usuário:</label>
          <input type="text" class="form-control" id="nameInputEdit" name="nameInputEdit" placeholder="Seu nome" value="<?php echo $nome ?>" required>
          <div class="invalid-feedback">Informe um nome válido (somente letras e espaços).</div>
        </div>
        <div class="form-group">
          <label for="emailInputEdit">E-mail:</label>
          <input type="text" class="form-control" id="emailInputEdit" name="emailInputEdit" placeholder="Seu email" value="<?php echo $email ?>" required>
          <div class="invalid-feedback">Informe um email válido.</div>
        </div>
        <div class="form-group">
          <label for="functionInputEdit">Função:</label>
          <input type="text" class="form-control" id="functionInputEdit" name="functionInputEdit" placeholder="Sua função" value="<?php echo $funcao ?>" required>
          <div class="invalid-feedback">Informe uma função válida (somente letras e espaços).</div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit" name="update" class="btn btn-success">Salvar</button>
      </form>
    </div>
  </div>
</div>

<!-- handle Form JS -->
<script src="../handles/editFormValidation.js"></script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>

