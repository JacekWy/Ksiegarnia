<?php

function normalsort(){

    $conn = new mysqli('localhost','root','','test');
    $result = $conn->query("select * from book");
    while ($row = $result->fetch_assoc())
    {
        echo '<div class="bookconteiner">
                           <div id="obraz">                        
                           <img src="picture/'.$row['Okladka'].'.jpg" height="200" width="200">
                            </div>
                           Tytul: '.$row['Tytul'].'<br><br>
                            Opis: '.$row['Opis'].'
                           
                            
                   <div id="cena">
                   Autor: '.$row['Autor'].'<br>
                   Cena: '.$row['Cena'].' zl
                    </div>
                   </div>';
    }

}
function sorttytul(){

    $conn = new mysqli('localhost','root','','test');

    $result = $conn->query("select * from book ORDER BY Tytul");
    while ($row = $result->fetch_assoc())
    {
        echo '<div class="bookconteiner">
                           <div id="obraz">                        
                           <img src="picture/'.$row['Okladka'].'.jpg" height="200" width="200">
                            </div>
                           Tytul: '.$row['Tytul'].'<br><br>
                            Opis: '.$row['Opis'].'
                           
                            
                   <div id="cena">
                   Autor: '.$row['Autor'].'<br>
                   Cena: '.$row['Cena'].' zl
                    </div>
                   </div>';
    }

}
function sortcena(){
    $conn = new mysqli('localhost','root','','test');

    $result = $conn->query("select * from book ORDER BY Cena");
    while ($row = $result->fetch_assoc())
    {
        echo '<div class="bookconteiner">
                           <div id="obraz">                        
                           <img src="picture/'.$row['Okladka'].'.jpg" height="200" width="200">
                            </div>
                           Tytul: '.$row['Tytul'].'<br><br>
                            Opis: '.$row['Opis'].'
                           
                            
                   <div id="cena">
                   Autor: '.$row['Autor'].'<br>
                   Cena: '.$row['Cena'].' zl
                    </div>
                   </div>';
    }


}









