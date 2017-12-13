<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
<header>
    <h1>Ksiazki</h1>
</header>
<nav>
    <ul>
        <li><a href="DodanieKsiazki.html">Dodaj Ksiazke</a></li>
        <li><a href="hh">Usun Ksiazke</a></li>
    </ul>
</nav>



        <?php
        include ('connect.php');

            while ($row = $result->fetch_assoc())
            {


                echo '<ol>
                            <li>Tytul: '.$row['Tytul'].'</li><br>
                            <li>Opis: '.$row['Opis'].'</li><br>
                            <li>Autor: '.$row['Autor'].'</li><br>
                            <li>Cena: '.$row['Cena'].' zl</li><br>
                      </ol>';




            }
        ?>




<footer>
    <h4>Najlepsza czytelnia</h4>
</footer>

</body>
</html>
