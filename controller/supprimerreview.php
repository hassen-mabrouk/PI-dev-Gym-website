<?php
include "ajouterReviews.php";

$reviews = new reviewC();

if (isset($_POST['idReview'])) {
    $reviews->supprimerreview($_POST['idReview']);
    header('location:../views/back/consulterreview.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idReview'];
}
