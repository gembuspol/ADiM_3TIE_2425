<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wykorzystanie funkcji</title>
</head>
<body>
    <?php
        function podajDane($dane1,$dane2,$dane3,$dane4){
            echo $dane1;
            echo "<br>";
            echo gettype($dane1);
            echo "<br>";
            echo "Podany parametr - ".$dane2." ma typ ".gettype($dane2);
        }
        podajDane(7,"Ala ma kota",4.2,'dasd');
        //funkcja zwracająca dane jako wynik
        function mnozenie($liczba1,$liczba2,$liczba3){
            $wynik=$liczba1*$liczba2*$liczba3;
            //zwracanie wyniku na zewnątrz funkcji
            return $wynik;
        }
        echo "<br>";
        //wywołanie funkcji i od razu wypisanie wyniku na ekran
        echo mnozenie(2,2,5);
        echo "<br>";
        //wywołanie funkcji i zapisanie wyniku do zmiennej
        $dzialanie=mnozenie(2,2,5);
        //wypisanie wyniku na ekran
        echo $dzialanie;
    ?>
</body>
</html>