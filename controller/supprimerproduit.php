<?php
include "ajouterProduits.php";

$produits = new produitC();

if (isset($_POST['idProduit'])) {
    $produits->supprimerproduit($_POST['idProduit']);
    header('location:../views/back/ConsulterProduits.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idProduit'];
}
