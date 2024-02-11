<?php 
  session_start();
  include_once('../../Metier/client.php');
  if(!isset($_SESSION['login'])){
    header("Location: /Stock-Management/");
  }

    if(isset($_GET)){
      DAO::deleteClient($_GET['id']);
    }

    header("Location: /Stock-Management/Presentation/Client/afficherClients.php");
?>