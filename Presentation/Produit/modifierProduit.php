<?php 
  session_start();
  if(!isset($_SESSION['login'])){
    header("Location: /Stock-Management/");
  }
  if(isset($_POST)){
    include_once('../../Metier/produit.php');
    if(extract($_POST)){
      $dao = new DAO();
    $c = new Produit($reference,$libelle,$prix,$quantite,$achat,$image,$cat,$desc);
    $c->update($c);
    $succes=true;
    }
  }
  header("Location: /Stock-Management/Presentation/Produit/afficherProduits.php");
?>