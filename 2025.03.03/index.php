<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <?php
        function dzielenieNaOdcinki($dlugosc,$iloscPodzialow){
            //dzielimy dlugosc na kilka odcinkow i wypisujemy jakiej długości jest jeden odcinek
            $odcinek=$dlugosc/$iloscPodzialow;
            return $odcinek;
        }
        //wywołujemy funkcję
        $wynik=dzielenieNaOdcinki(10,5);
        echo "Podzieliśmy kabel na odcinki o długości $wynik";
        //funkcja łącząca teksty
        function laczenieTekstow($tekst){
            echo "Hej, fajnie, że jesteś!. Napisałeś: $tekst";
        }
        echo "<br>";
        //wywołanie funkcji
        laczenieTekstow("Natan zostaje abstynentem");
        //obliczanie przekątnej kwadratu
        function przekatnaKwadrat($a){
            $przekatna=$a*sqrt(2);
            return $przekatna;
        }
        echo "<br>";
        //wywołanie funkcji
        echo "Przekątna kwadratu o boku 100 wynosi ".przekatnaKwadrat(100);
        echo "<br>";
        echo "Przekątna kwadratu o boku 200 wynosi ".przekatnaKwadrat(200);
        echo "<br>";
        echo "Przekątna kwadratu o boku 50 wynosi ".przekatnaKwadrat(50);

        //[przekątna prostokąta]
        function przekatnaProstokata($a, $b){
            $c=sqrt(pow($a,2)+pow($b,2));
            return $c;
        }
        echo "<br>";
        //wywołanie funkcji
        echo "Przekątna prostokąta o bokach 100 i 50 wynosi ".przekatnaProstokata(100,50);
        echo "<br>";
    ?>
</body>
</html>