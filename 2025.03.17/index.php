<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //deklracja tablicy
    $tablica=array(1,4,6,7,-4,2,6,-7,1);
    //wypisanie 3 elementu tablicy na ekran
    echo $tablica[2];
    echo "<br>";
    //wypisanie elemntu tablicy o indeksie 3
    echo $tablica[3];
    echo "<br>";
    //wypisanie całej tablicy
    print_r($tablica);
    echo "<br>";
    //posortowanie tablicy
    sort($tablica);
    print_r($tablica);
    echo "<br>";
    //ilość elementów w tablicy
    echo count($tablica);
    echo "<br>";
    //dopisanie elementu na początek tablicy
    array_unshift($tablica,777);
    print_r($tablica);
    echo "<br>";
    //dopisanie elementu na koniec tablicy
    array_push($tablica,222);
    print_r($tablica);
    echo "<br>";
    //usunięcie ostatniego elementu tablicy
    array_pop($tablica);
    print_r($tablica);
    echo "<br>";
    //usunięcie pierwszego elementu tablicy
    array_shift($tablica);
    print_r($tablica);
    echo "<br>";
    //usunięcie jednego elementu ze środka tablicy - uwaga nie zmieniają się indeksy po usunięciu
    unset($tablica[3]);
    print_r($tablica);
    echo "<br>";
    //usuniecie kilku elementów z tablicy
    array_splice($tablica,5,7 );
    print_r($tablica);
    echo "<br>";
    ?>
</body>
</html>