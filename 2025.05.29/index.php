<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz nr3 </title>
</head>
<body>
    <header>
        <h2>Formularz - przesyłanie danych w formularzu</h2>
    </header>
    <main>
        <form action="index.php" method="GET">
            <label for="rozmowca">Kto rozmawia?</label>
            <input type="text" id="rozmowca" name="rozmowca">
            <br>
            <label for="temat">Na jaki temat rozmawia</label>
            <br>
            <input type="radio" name="temat" value="dlaczego nie ma Olka na lekcji">O Olku
            <br>
            <input type="radio" name="temat" value="jak zapisać formularz na stronie">Na temat lekcji
            <br>
            <input type="radio" name="temat" value="jak zdać prawo jazdy za pierwszy razem">O prawie jazdy
            <br>
            
            <input type="submit" value="Wyslij dane">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "GET"){
                if(empty($_GET["rozmowca"])){
                    
                    echo "Brak rozmowcy";
                }else{
                    echo "Rozmawia: ".$_GET["rozmowca"]." na temat: ".$_GET["temat"];
                }
            }

        ?>
    </main>
</body>
</html>