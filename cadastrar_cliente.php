<?php
include("conexao.php");
if(isset($_POST["cadastrar"])){
    
    $nome = $_POST["nome"];
    $empresa = $_POST["empresa"];
    $sobrenome = $_POST["sobrenome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $tipo_logradouro = $_POST["tipo_logradouro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
   
    
      
    $sqlcadalunoend = "insert into endereco (cod_end,tipo_logradouro,logradouro,numero,bairro,cep,estado)
                    values(null,'{$tipo_logradouro}','{$logradouro}','{$numero}','{$bairro}','{$cep}','{$estado}')";

    $sqlcadcontato = "insert into contato (cod_contato,tel,email) values (null,'{$telefone}','{$email}')";
    
    $sqlcadempresa = "insert into empresa (cod_empresa,nome_empresa,cod_end,cod_contato) values ('{$empresa}')";

    $sqlcadclie = "insert into cliente (nome_clie,sobrenome_clie,login,senha,cod_end,cod_contato,cod_empresa)
                    values ('{$nome}','{$sobrenome}','{$login}','{$senha}')";
    
    if(mysqli_query($con, $sqlcadalunoend)){
        if(mysqli_query($con , $sqlcadcontato)){
          if(mysqli_query($con, $sqlcadclie)){
            echo "Cadastro efetuado com sucesso!";

    }else{
        echo "Não foi possível efetuar o cadastro";
    }
    }
    }
    
     
}
?>