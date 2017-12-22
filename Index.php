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
        <nav>
                <a href="DodanieKsiazki.html">Dodaj Ksiazke</a>
        </nav>

        <section>
            <?php
            require_once ('connect.php');
            $result = $conn->query("select * from book");
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

    <footer>

    </footer>

</div>
</body>
</html>