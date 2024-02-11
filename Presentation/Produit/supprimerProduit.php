<?php 
  session_start();
  include_once('../../Metier/produit.php');
  if(!isset($_SESSION['login'])){
    header("Location: /Stock-Management/");
  }

    if(isset($_GET)){
        Produit::deleteProduit($_GET['id']);
    }

    header("Location: /Stock-Management/Presentation/Produit/afficherProduits.php");
?>
