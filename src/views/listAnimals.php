<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Template PHP Gitpod</title>
</head>

<body>
<div class="list-group" style="margin: 10px 50px;">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" style="margin-bottom: 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  Cadastrar animal
</button>
  <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="list-group-item list-group-item-action" aria-current="true">Animal 0</button>
  <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="list-group-item list-group-item-action">Animal 1</button>
  <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="list-group-item list-group-item-action">Animal 2</button>
  <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="list-group-item list-group-item-action">Animal 3</button>
  <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="list-group-item list-group-item-action">Animal 4</button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chihuahua</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Você tem certeza que deseja excluir o animal x?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Excluir Animal</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <form class="row g-3" style="width: 600px;">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Raça</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Idade</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Peso</label>
            <input type="password" class="form-control" id="inputPassword4">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>