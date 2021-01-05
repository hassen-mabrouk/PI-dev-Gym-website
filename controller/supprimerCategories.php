<?php
include "ajouterCategories.php";

$Categories = new CategorieC();

if (isset($_POST['idCategorie'])) {
    $Categories->supprimerCategorie($_POST['idCategorie']);
    header('location:../views/back/consultercategorie.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idCategorie'];
}
