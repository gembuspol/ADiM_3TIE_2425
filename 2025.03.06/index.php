<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $zmienna="Olek";
        $zmienna1="Zuzia";
        $tablica=array("Olek","Zuzia","Marcin","Bartek","Natalia");
        echo $zmienna;
        echo "<br>";
        echo $tablica[0];
        echo "<br>";
        //wypisanie wszystkich elementów tablicy za pomoca funkcji print_r
        print_r($tablica);
        echo "<br>";
        //działania matematyczne z wykorzystaniem tablicy
        $liczby=array(3,5,7,1,34,123,534,123);
        //dodanie pierwszego elementu listy z czwartym elementem listy
        echo $liczby[0]+$liczby[3];
        echo "<br>";
        //zmiana wartości w tablicy
        echo $liczby[4];
        //zmieniamy wartość
        $liczby[4]=5;
        echo "<br>";
        echo $liczby[4];
    ?>
</body>
</html>