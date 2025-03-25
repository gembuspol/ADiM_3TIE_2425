<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for</title>
</head>
<body>
    <header>
        <h2>Pętla for</h2>
    </header>
    <?php
    // pętla for - pozwala na wykonanie czynności określoną ilość razy.
    // Budowa pętli: for(początek_pętli;koniec_pętli;zmiana wartości pętli w kolenym kroku){ działo funkcji }
    for ($x=1;$x<=10;$x++){
        echo $x;
        echo "<br>";
    }
    //wypisawanie liczb parzystych
    for ($x=0;$x<=10;$x=$x+2){
        echo $x;
        echo "<br>";
    }
    //liczby nieparzyste malejąco od 21 do 11
    for ($x=21;$x>=11;$x=$x-2){
        echo $x;
        echo "<br>";
    }
    ?>
</body>
</html>