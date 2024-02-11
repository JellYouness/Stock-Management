<?php 
  session_start();
  include_once('../../Metier/fournisseur.php');
  if(!isset($_SESSION['login'])){
    header("Location: /Stock-Management/");
  }

    if(isset($_GET)){
      Fournisseur::delete($_GET['id']);
    }

    header("Location: /Stock-Management/Presentation/Fournisseur/afficherFournisseurs.php");
?>