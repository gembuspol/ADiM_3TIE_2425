<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje cz. 1</title>
</head>
<body>
    <?php
    //deklaracja funkcji, w nawiasie podajemy paramtery wywołania
    function bolek(){
        //ciało funkcji czyli instrukcje które mają być wywowłane
        echo "Olek jest super!";
    }

    //wywołanie funkcji
    bolek();
    bolek();
    bolek();
    bolek();
    bolek();
    echo "<br><hr><br>";
    //deklaracja funkcji z parametrami
    function suma($liczba1,$liczba2){
        //deklaracja ciała funkcji
        $dzialanie=$liczba1+$liczba2;
        echo "Wynik dodawania to ".$dzialanie;
    }
    //wywołanie funkcji
    suma(100,58);
    echo "<br>";
    suma(14,7);
    echo "<br>";
    suma(844323,7312312);
    echo "<br><hr><br>";
    //deklaracja funkcji
    function teksty($tekst1,$tekst2,$tekst3){
        echo "Siema, tutaj DJ ".$tekst1."! Dzisiaj dla Was zagram najnowsze kawałki zespołu ".$tekst2.". Bawcie sie dobrzej jak ".$tekst3.".";
    }

    //wywolanie funkcji
    teksty("Igor", "Parmezan", "Skibidi");
    ?>
    
</body>
</html>