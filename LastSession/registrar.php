<?php

  include './crud.php';
  include './upload.php';

  session_start();

  if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $foto = $_FILES['inputFoto'];
    If(!$foto['error']) {
      $_POST['inputFoto'] = uploadImg($foto);
    } else {
      $_POST['inputFoto'] = "avatar.jpeg";
    }
    
    if(setContact($_POST)) {
      $_SESSION['msg'] = 'Dados gravados com sucesso';
    } else {
      $_SESSION['msg'] = 'Falha ao gravar';
    }

    header('Location: index.php');
    exit;
  }