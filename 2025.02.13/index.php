<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje matematyczne</title>
</head>
<body>
    <main>
        <?php
        // an=a1+(n-1)*r
            function wyrazCiagu($a1,$r,$n){
                $an=$a1+($n-1)*$r;
                echo "Wyraz ".$n." ciągu arytmetycznego wynosi: ".$an;
            }
            //wywołanie funkcji
            wyrazCiagu(2,5,100);
            //zaokrąglanie liczb
            function zaokraglenieDo2miejsc($liczba1,$liczba2){
                $dzielenie=$liczba1/$liczba2;
                $zaokr=round($dzielenie,2);
                return $zaokr;
            }
            //wywołanie funkcji i wypisanie działania za pomocą echo
            $wynik=zaokraglenieDo2miejsc(3.1325,7);
            echo "<br>";
            echo "Zaokrąglenie do 2 miejsc po przecinku ".$wynik;
            echo "<br>";
            //zaokrąglenie w górę i w dół
            function zaokraglenia($liczba){
                //zaokrąglenie w górę za pomocą funkcji ceil()
                echo "Zaokrąglenie w górę: ".ceil($liczba);
                echo "<br>";
                //zaokrąglenie w dół za pomocą funkcji
                echo "Zaokrąglenie w dół: ".floor($liczba);
            }
            zaokraglenia(1000.341);
        ?>
    </main>
    
</body>
</html>