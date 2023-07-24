<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Página</title>
  <!-- Adicione o link para o CSS do Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <!-- Barra de Navegação -->


<?php include "menu.php";?>




  <!-- Seção Sobre -->
  <section id="sobre" class="py-5">
    <div class="container">
      <h2 class="text-center">Sobre</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec quam at nunc tincidunt consequat ut
        quis odio. In dictum convallis nisi eget aliquet. Nulla facilisi. Integer finibus ac turpis ac bibendum. Nunc
        id nulla eget purus egestas fringilla ac a est. Nulla facilisi. Sed aliquet quam eu luctus ullamcorper.
      </p>
    </div>
  </section>

  <!-- Seção Contato -->
  <section id="contato" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center">Contato</h2>
      <form>
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <div class="form-group">
          <label for="mensagem">Mensagem</label>
          <textarea class="form-control" id="mensagem" rows="4" placeholder="Digite sua mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </section>


      <!-- Adicione as seguintes linhas para incluir os scripts do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
