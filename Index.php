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


             echo '<ol class="list">
                            <li>Tytul: '.$row['Tytul'].'</li><br>
                            <li>Opis: '.$row['Opis'].'</li><br>
                            <li>Autor: '.$row['Autor'].'</li><br>
                            <li>Cena: '.$row['Cena'].' zl</li><br>
                      </ol>';
         }
         ?>

     </section>






 </div>

<footer>

</footer>

</div>
</body>
</html>