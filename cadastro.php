<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="imgs/favicon.ico">

    <title>GEN - Cadastrar</title>
  </head>
  <body>
    <div class="container-fluid nav-index">
        <nav class="navbar fixed-top navbar-dark bg-dark menu col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <a class="navbar-brand" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" href="#">Menu</a>
          <button class="navbar-toggler button-top" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="cadastro.php">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quem.php">Quem Somos</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <form name="form_clie" method="POST" action="cadastrar_cliente.php" class="cad col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <fieldset class="cad">
          <legend class="lgndcad">Dados do Cliente</legend>
          <p style="text-align: center; margin: 0 auto; color: #000;">Nome</p>
          <input type="text" name="nome" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #000;">Sobrenome</p>
          <input type="text" name="sobrenome" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #000;">Login</p>
          <input type="text" name="login" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #000;">Senha</p>
          <input type="password" name="senha" required><p></p>
          </fieldset>
          <fieldset class="cad">
          <legend class="lgndcad">Dados da Empresa</legend>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Telefone</p>
          <input type="number" name="telefone" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">E-mail</p>
          <input type="email" name="email" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Nome da Empresa</p>
          <input type="text" name="empresa" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Tipo logradouro</p>
          <select name="tipo_logradouro" required>
                    <option value="">---</option>
                    <option>Rua</option>
                    <option>Avenida</option>
                    <option>Condomínio</option>
                    <option>Alameda</option>
          </select><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Logradouro</p>
          <input type="text" name="logradouro" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Número de endereço</p>
          <input type="number" name="numero" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Bairro</p>
          <input type="text" name="bairro" required><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">Estado</p>
          <select name="estado" required>
            <option value="">---</option>
            <option>Acre - AC</option>
            <option>Alagoas - AL</option>
            <option>Amapá - AP</option>
            <option>Amazonas - AM</option>
            <option>Bahia  - BA</option>
            <option>Ceará - CE</option>
            <option>Distrito Federal  - DF</option>
            <option>Espírito Santo - ES</option>
            <option>Goiás - GO</option>
            <option>Maranhão - MA</option>
            <option>Mato Grosso - MT</option>
            <option>Mato Grosso do Sul - MS</option>
            <option>Minas Gerais - MG</option>
            <option>Pará - PA</option>
            <option>Paraíba - PB</option>
            <option>Paraná - PR</option>
            <option>Pernambuco - PE</option>
            <option>Piauí - PI</option>
            <option>Rio de Janeiro - RJ</option>
            <option>Rio Grande do Norte - RN</option>
            <option>Rio Grande do Sul - RS</option>
            <option>Rondônia - RO</option>
            <option>Roraima - RR</option>
            <option>Santa Catarina - SC</option>
            <option>São Paulo - SP</option>
            <option>Sergipe - SE</option>
            <option>Tocantins - TO</option>
          </select><p></p>
          <p style="text-align: center; margin: 0 auto; color: #fff;">CEP</p>
          <input type="number" required name="cep"><p></p>
          </fieldset>
          <input type="submit" value="Cadastrar" class="cadastrar"  onclick="return validar()">
        </form>
        <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     //Jquery//



    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>