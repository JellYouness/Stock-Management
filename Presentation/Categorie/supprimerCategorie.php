<?php 
  session_start();
  include_once('../../Metier/categorie.php');
  if(!isset($_SESSION['login'])){
    header("Location: /Stock-Management/");
  }


        Categorie::delete($_GET['id']);
  

    header("Location: /Stock-Management/Presentation/Categorie/afficherCategories.php");
?>