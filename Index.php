<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <table style="width: 40%;" border="1">
        <tbody>
        <tr>
            <td>Tytul</td>
            <td>Opis</td>
            <td>Autor</td>
            <td>Cena</td>
        </tr>
        <?php
        $conn = new mysqli('localhost','root','','test');

        $result = $conn->query("select * from book");

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<tr>
                        <td>'.$row['Tytul'].'</td>
                        <td>'.$row['Opis'].'</td>
                        <td>'.$row['Autor'].'</td>
                        <td>'.$row['Cena'].'</td>
                      </tr>';
            }
        }
        ?>
        </tbody>
    </table>

</article>

<footer>
    <h4>Najlepsza czytelnia</h4>
</footer>

</body>
</html>
