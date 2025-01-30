<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP zmienne</title>
</head>
<body>
    <?php
        // deklaracja zmiennej z liczbą całkowitą
        $zmienna1=10;
        // wypisanie zmiennej na ekran
        echo $zmienna1;
        // zmienna zawierająca tekst
        $zmienna2="Klasa 3TIE";
        // wyślemy na ekran znak nowej linii z HTML <br> a potem wyslemy drugą zmienną
        echo "<br>";
        echo $zmienna2;
        // zmienne zmiennoprzecinkowe
        $zmienna3=47.14;
        echo "<br>";
        echo $zmienna3;
        // działania matematyczne
        // dzielenie dwóch zmiennych - zmienna1 i zmienna 3
        echo "<br>";
        echo $zmienna1/$zmienna3;

        // łączenie tekstów - wykonujemy to poprzez użycie znaku ".", można to stosować zarówno przy zmiennych jak i zmiennych i tekstach
        echo "<br>";
        echo $zmienna2." - tutaj wypisałem zmienną";
        echo "<br>";
        echo $zmienna2.$zmienna2;

    ?>   
</body>
</html>