<?php

  require('./conexao.php');

  function setContact($request) {

    # resgata a conexão
    $link = getConnection();
    # monta a query
    $query = "insert into tb_contatos values (null, '{$request['inputNome']}', '{$request['inputEmail']}', '{$request['inputPhone']}', '{$request['inputCep']}', '{$request['inputLogradouro']}', '{$request['inputBairro']}', '{$request['inputCidade']}', '{$request['inputEstado']}', '{$request['inputFoto']}')";

    # executa a transação
    try {
      mysqli_query($link, $query);
      return true;
    } catch (\Exception $e) {
      throw new \Exception("Erro ao gravar", 1);
      return false;
    } finally {
      mysqli_close($link);
    }
  }

  function getContacts() {
    $link = getConnection();

    $query = "select * from tb_contatos";
    try {
      $rs = mysqli_query($link, $query);
      $contacts = array();

      while ($row = mysqli_fetch_assoc($rs)) {
        array_push($contacts, $row);
      }

      return $contacts;
    } catch (\Exception $e) {
      throw new \Exception("Erro ao listar", 1);
      return array();
    } finally {
      mysqli_close($link);
    }
  }

  function deleteContact($request) {

    $link = getConnection();

    $query = "delete from tb_contatos where id = {$request['id']}";

    try {
      mysqli_query($link, $query);
      return true;
    } catch (\Exception $e) {
      throw new \Exception("Erro ao excluir", 1);
      return false;
    } finally {
      mysqli_close($link);
    }
  }