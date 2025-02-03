<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Działanie na zmiennych</title>
</head>
<body>
    <?php
        $liczba=10;
        $tekst="cztery";
        $zmiennaPrzecinek=18.5;
        $logiczna=true;
        echo $liczba;
        echo "<br>";
        echo gettype($liczba);
        echo "<br>";
        echo "Zmienna o nazwie zmiennaPrzecinek ma wartość ".$zmiennaPrzecinek." i jest typu ".(gettype($zmiennaPrzecinek));
        //przypisanie do zmiennej o nazwie zmiana wartości zmiennej liczba
        $zmiana=$liczba;
        //wypisanie typu zmiennej o nazwie zmiana
        echo "<br> ".gettype($zmiana);
        //zmiana typu zmiennej o nazwie zmiana (rzutowanie)
        $zmiana=(float)$liczba;
        //wypisanie typu zmiennej o nazwie zmiana
        echo "<br> ".gettype($zmiana);
    ?>
</body>
</html>