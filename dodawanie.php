<?php
require_once ('connect.php');
if (isset($_POST['submit'])){
    $tytul = $_POST['Tytul'];
    $opis = $_POST['Opis'];
    $autor = $_POST['Autor'];
    $cena = $_POST['Cena'];

}

$conn->query("Insert into book (Tytul, Opis, Autor, Cena) VALUES ('$tytul','$opis','$autor','$cena')");

header('Location:Index.php');

