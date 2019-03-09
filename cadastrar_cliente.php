<?php
include("conexao.php");
if(isset($_POST["cadastrar"])){
    
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $empresa = $_POST['empresa'];
    $tipo_logradouro = $_POST["tipo_logradouro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
        
    $sqlend = "insert into endereco (cod_end,tipo_logradouro,logradouro,numero,bairro,cep,estado) values(null,'{$tipo_logradouro}','{$logradouro}','{$numero}','{$bairro}','{$cep}','{$estado}')";

    $sqlcontato = "insert into contato (cod_contato,tel,email) values (null,'{$telefone}','{$email}')";
    
    $sqlempresa = "insert into empresa (cod_empresa,nome_empresa) values (null,'{$empresa}')";

    $sqlclie = "insert into cliente (nome_clie,sobrenome_clie,login,senha,cod_end,cod_contato) values ('{$nome}','{$sobrenome}','{$login}','{$senha}')";
    
    if(mysqli_query($con, $sqlend)){
        if(mysqli_query($con, $sqlcontato)){          
    if(mysqli_query($con, $sqlempresa)){
        if(mysqli_query($con, $sqlclie)){
            echo "Cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possível efetuar o cadastro";
    }
    }
    }
    }
}     
?>