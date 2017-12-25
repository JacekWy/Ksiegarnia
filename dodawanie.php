<?php
require_once ('connect.php');

if (isset($_POST['submit'])){
    $tytul = $_POST['Tytul'];
    $opis = $_POST['Opis'];
    $autor = $_POST['Autor'];
    $cena = $_POST['Cena'];
    $okladka = $_POST['Okladka'];

}

$conn->query("Insert into book (Tytul, Opis, Autor, Cena, Okladka) VALUES ('$tytul','$opis','$autor','$cena','$okladka')");

header('Location:Index.php');

