<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Ksiegarnia Koniecpol</title>
    <link rel="stylesheet" type="text/css" href="site.css">
</head>
<body>
<div id="conteiner">
    <header>
        <h1>Ksiegarnia Koniecpol</h1>
    </header>
    <div id="kontener">
        <nav>
            <ul>
                <li><a href="DodanieKsiazki.html">Dodaj Ksiazke</a></li>
                <li><a href="hh">Usun Ksiazke</a></li>
            </ul>
        </nav>

        <section>
            <?php
            include ('connect.php');
            while ($row = $result->fetch_assoc())
            {
                echo '<div class="bookconteiner">
                
                           Tytul: '.$row['Tytul'].'<br>
                            Opis: '.$row['Opis'].'<br>
                           Autor: '.$row['Autor'].'<br>
                            Cena: '.$row['Cena'].' zl<br>
                   
                   </div>';
            }
            ?>

        </section>


    </div>

    <footer>

    </footer>

</div>
</body>
</html>