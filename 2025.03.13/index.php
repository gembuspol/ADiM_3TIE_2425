<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice asoscjacyjne</title>
</head>
<body>
    <main>
        <?php
            //deklaracja tablic
            //1 sposób z wykorzystaniem funkcji array
            $tablica1=array("das",111,12.5);
            //2 sposób - z wykorzystnaiem nawiasów kwadratowych
            $tablica2[]="Olek";
            $tablica2[]=23;
            $tablica2[]=762.12;
            // tablica dwuwymiarowa z dwóch tablic
            $tablica3[]=$tablica1;
            $tablica3[]=$tablica2;
            //wypisanie tablic
            echo "<br>";
            print_r($tablica1);
            echo "<br>";
            print_r($tablica2);
            echo "<br>";
            print_r($tablica3);
            //tablice asoscjacyjną - zamiast indeksów numerycznych są indeksy tekstowe
            //1 sposób deklaracji
            $tablica4["imie"]="Piotr";
            $tablica4["nazwisko"]="Kowalski";
            $tablica4["nrButa"]=42;
            echo "<br>";
            print_r($tablica4);
            echo "<br>";
            echo $tablica4["nazwisko"];
            //błędnie jest użycie indeksu np. $tablica4[1] 
            //2 sposób deklaracji tablicy asocjacyjnej
            $tablica5=array("bulka"=>10, "spagetti"=>1500,"chrupbox"=>12);
            echo "<br>";
            print_r($tablica5);
            echo "<br>";
            echo $tablica5["chrupbox"];


        ?>
    </main>
</body>
</html>