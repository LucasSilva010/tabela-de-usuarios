<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  
</head>

<body style="height: 100vh;" class=" d-flex align-items-center justify-content-center">
  
<div class="container">
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-4">
      <!-- Formulário para registrar usuários -->
      <form class="col-md-12" action="../actions/users_insert.php" method="post">
        <div class="form-group">
          <label for="nameInput">Nome do usuário:</label>
          <input type="text" class="form-control" id="nameInput" name="nameInput" placeholder="Seu nome">
        </div>
        <div class="form-group">
          <label for="emailInput">E-mail:</label>
          <input type="email" class="form-control" id="emailInput" name="emailInput" placeholder="Seu email">
        </div>
        <div class="form-group">
          <label for="functionInput">Função:</label>
          <input type="text" class="form-control" id="functionInput" name="functionInput" placeholder="Sua função">
        </div>
        <button type="submit" class="btn btn-success">Registrar</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>