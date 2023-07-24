<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Polo</title>
<!-- Adicione o link para o CSS do Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Formulário de Polo</h2>

    <form  method="POST"  action="add.php" enctype="multipart/form-data" >
      <!-- Campo para o nome do polo -->
      <div class="mb-3">
        <label for="nomePolo" class="form-label">Nome do Polo</label>
        <input type="text" class="form-control" name="NomeDoPolo" placeholder="Digite o nome do polo">
      </div>

      <!-- Campo para o endereço -->
      <div class="mb-3">
        <label for="enderecoPolo" class="form-label">Endereço</label>
        <input type="text" class="form-control" name="EnderecoDoPolo" placeholder="Digite o endereço do polo">
      </div>

      <!-- Campo para a imagem -->
      <div class="mb-3">
        <label for="imagemPolo" class="form-label">Imagem</label>
        <input type="file" class="form-control" name="ImagemPolo">
      </div>

      <!-- Botão de envio -->
      <button type="Submit" name="Enviar" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <!-- Adicione o link para o JavaScript do Bootstrap e o jQuery -->
    <!-- Adicione as seguintes linhas para incluir os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>