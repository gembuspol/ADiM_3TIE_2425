<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice dwuwymiarowe</title>
</head>
<body>
    <?php
        $tablica=array("Osiemnaście",30,402, 105.60,"cokolwiek");
        echo $tablica[0];
        echo "<br>";
        $tablica[2]=555;
        echo $tablica[2];
        echo "<br>";
        $suma=$tablica[1]+$tablica[3];
        echo $suma;
        echo "<br>";
        //drugi sposób tworzenia tablic
        $tablica2=[4,66,"tekst"];
        print_r($tablica2);
        //tablica dwuwymiarowa
        $tablica3=[
            ["Barcelona","GKS Jastrzębie", "Piast Gliwice"], //indeks 0
            ["Chicago Bulls", "Los Angeles Lakers", "Memphis Grizzlies"], //indeks 1
            ["Jastrzębski Węgiel", "ZAKSA Kędzierzyn Koźle", "KS Jajo"] //indeks 2
        ];
        echo "<br>";
        print_r($tablica3);
        //tablica dwuwymiarowa jest podobna do tabeli, ma dwier współrzędne. Aby odnieść się do kokrentej wartości podajemy jej indeksy (współrzędne)
        echo "<br>";
        //wypisujemy LA Lakers - znajduje się w drugim poziomie tablicy czyli w indeksie 1, a w podtablicy również znajduje siew indeksie 1
        echo $tablica3[1][1];
        //barcelona indeksy 0 i 0
        echo "<br>";
        echo $tablica3[0][0];
        //piast gliwice indeksy 
        echo "<br>";
        echo $tablica3[0][2];
    ?>
</body>
</html>