<?php
  session_start();
  include './listar.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registro</title>
  </head>
  <body>
    <div class="">
        <fieldset>
          <div class="container py-5">
            <div class="row">
              <div class="col-md-12">
                <h2 class="text-center mb-5">Dados de Contato</h2>
                <ul class="nav nav-fill">
                  <a class="nav-item" href="#formChange">Editar</a>
                  <a class="nav-item" href="#formRegister">Registro</a>
                  <a class="nav-item" href="#tableContact">Lista</a>
                </ul>
                <hr class="mb-5">

                <div class="row">
                  <div class="col-md-6 offset-md-3">
                    <span class="anchor" id="formChange"></span>

                    <!-- form find contact -->
                    <div class="card card-outline-secondary">
                      <div class="card-header">
                        <h3 class="mb-0">Localizar Contato</h3>
                      </div>
                      <div class="card-body">
                        <form id="formFindContact" class="form" role="form" autocomplete="off">
                          <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" required>
                            <span id="findEmail" class="form-text small text-muted">
                              Informe um email para localizar o contato.
                            </span>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-lg float-right">Buscar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /form find contact -->
                  </div>
                  <div class="col-md-6 offset-md-3">
                    <hr class="my-5">
                    <span class="anchor" id="formRegister"></span>

                    <!-- form contact info -->
                    <div class="card card-outline-secondary">
                      <div class="card-header">
                        <h3 class="mb-0">Informações de Contato</h3>
                      </div>
                      <div class="card-body">
                        <form id="formRegisterContact" class="form" role="form" autocomplete="off" enctype="multipart/form-data">
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" form="inputFotoId">Foto</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="file" id="inputFotoId" name="inputFoto" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" form="inputNomeId">Nome</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" value="Jane" id="inputNomeId" name="inputNome" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" for="inputEmailId">Email</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="email" value="exemplo@senac.com.br" id="inputEmailId" name="inputEmail" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label" for="inputPhoneId">Telefone</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="tel" value="(21) 2121-2121" id="inputPhoneId" name="inputPhone" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Cep</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" value="01001-000" id="inputCepId" name="inputCep" required>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Logradouro</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" value="Rua x, numero 789" id="inputLogradouroId" name="inputLogradouro" readonly required>
                              <span id="logradouroField" class="form-text small text-muted">
                                Campo carregado automaticamente.
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Bairro</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" value="Bonsucesso" id="inputBairroId" name="inputBairro" readonly required>
                              <span id="bairroField" class="form-text small text-muted">
                                Campo carregado automaticamente.
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Cidade</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" value="Rio de Janeiro" id="inputCidadeId" name="inputCidade" readonly
                                required>
                                <span id="cidadeField" class="form-text small text-muted">
                                  Campo carregado automaticamente.
                                </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Estado</label>
                            <div class="col-lg-9">
                              <input class="form-control" type="text" value="RJ" id="inputEstadoId" name="inputEstado" readonly
                                required>
                                <span id="estadoFild" class="form-text small text-muted">
                                  Campo carregado automaticamente.
                                </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                              <input type="reset" class="btn btn-secondary" value="Limpar">
                              <button type="submit" formaction="registrar.php" formmethod="post" form="formRegisterContact" class="btn btn-primary">Registrar</button>
                              <span id="statusMsg" class="form-text small text-muted">
                                <?php
                                  if(isset($_SESSION['msg'])) {
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                  }
                                ?>
                              </span>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- /form contact info -->
                  </div>
                  <!--/col-->

                  <div class="col-md-10 offset-md-1">
                    <span class="anchor" id="tableContact"></span>
                    <hr class="my-5">
                    <h3>Lista de Contatos</h3>

                    <!-- table contacts -->
                    <div class="form-row mt-4">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Cep</th>
                            <th scope="col" colspan="2"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach (listContacts() as $row): ?>
                            <tr>
                              <th scope="row"><?= $row['id'] ?></th>
                              <td><?= $row['nome'] ?></td>
                              <td><?= $row['email'] ?></td>
                              <td><?= $row['telefone'] ?></td>
                              <td><?= $row['cep'] ?></td>
                              <td><a href="editar.php?id=<?= $row['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                              <td><a href="apagar.php?id=<?= $row['id'] ?>"><i class="fa fa-trash" onclick="return confirm('Deseja mesmo excluir esse contato?')" aria-hidden="true"></i></a></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>

                  </div>

                </div>
                <!--/row-->

                <br><br><br><br>

              </div>
              <!--/col-->
            </div>
            <!--/row-->
            <hr>
            <p class="text-center">Senac Rio.<br>
              <a class="small text-info d-inline-block" href="https://www.rj.senac.br/cursos/tecnologia-da-informacao/tecnico-em-informatica/">Técnico em Informática</a>
            </p>

          </div>
          <!--/container-->
        </fieldset>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>