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
            <div id="sort">
                Sortuj
                <form action="Index.php" method="post">
                    <select name="wybor">
                        <option name="Tytul">Tytul</option>
                        <option name="Cena">Cena</option>
                    </select>
                    <input type="submit" name="sort" value="Sortuj">

                </form>


            </div>
            <?php
            require_once ('Sort.php');

            if(isset($_POST['wybor'])){
                $w = $_POST['wybor'];

                switch ($w){
                    case 'Tytul':
                        sorttytul();
                        break;
                    case  'Cena':
                        sortcena();
                        break;
                }

            }else{
            normalsort();
            }


            ?>

        </section>

    <footer>

    </footer>

</div>
</body>
</html>