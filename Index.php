<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
<header>
    <h1>Ksiazki</h1>
</header>
<nav>
    <ul>
        <li><a href="AddBook.html">Dodaj Ksiazke</a></li>
        <li><a href="AddBook.html">Usun Ksiazke</a></li>
    </ul>
</nav>
<article>


        <?php
        include ('connect.php');

            while ($row = $result->fetch_assoc())
            {


                echo '<ol style="list-style-type: none;">
                            <li>Tytul: '.$row['Tytul'].'</li><br>
                            <li>Opis: '.$row['Opis'].'</li><br>
                            <li>Autor: '.$row['Autor'].'</li><br>
                            <li>Cena: '.$row['Cena'].' zl</li><br>
                      </ol>';




            }
        ?>


</article>

<footer>
    <h4>Najlepsza czytelnia</h4>
</footer>

</body>
</html>
