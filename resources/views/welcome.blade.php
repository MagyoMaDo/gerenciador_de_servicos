<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agendamento de Serviços</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
            ])
    </head>
    <body>
        <!-- NAVBAR-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #309dcf;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
        <a class="nav-link active" aria-current="page" href="#">Consultar</a>
      </div>
    </div>
  </div>
</nav>
<!-- NAVBAR-->
<br>
<b><legend>Cadastrar - Agendamento de Pontenciais Clientes</legend></b>
<h5>Sistema Utilizado para agendamento de serviços</h5>
<br>
<!-- FORM -->
<form class="row g-3">
<div class="col-12">
    <label for="inputName" class="form-label">Nome</label>
    <input type="name" class="form-control" id="inputName">
  </div>
  <div class="col-12">
    <label for="inputTelefone" class="form-label">Telefone</label>
    <input type="telefone" class="form-control" id="inputTelefone" placeholder="(xx)xxxxx-xxxx">
  </div>
  <div class="col-12">
    <label for="inputOrigem" class="form-label">Origem</label>
    <select id="inputOrigem" class="form-select">
      <option selected>Cidade</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-12">      
    <label for="inputDDC" class="form-label">Data de contato</label>
    <input type="date" class="form-control" id="inputDDC" >
  </div>
  <div class="col-12">      
    <label for="inputOBS" class="form-label">Observações</label>
    <textarea class="form-control" id="inputOBS" rows="3"></textarea>
  </div>
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
<!-- FORM -->

    </body>
</html> 
