<?php

  include './crud.php';

  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'GET') {
    if(deleteContact($_GET)) {
      $_SESSION['msg'] = 'Contato apagado com sucesso';
    } else {
      $_SESSION['msg'] = 'Falha ao apagar';
    }

    header('Location: index.php');
    exit;
  }
  ?>