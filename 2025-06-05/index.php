<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Kalkulator kosztów montażu</h1>
        <form method="POST" action="index.php">
        <label for="szerokosc">Szerokość pomieszczenia [m]: </label>
        <input type="number" id="szerokosc" name="szerokosc">
        <label for="dlugosc">Długość pomieszczenia [m]: </label>
        <input type="number" id="dlugosc" name="dlugosc">
        <p>Typ panelu</p>
        <label for="laminowane">Panele laminowane</label>
        <input type="radio" id="laminowane" name="radio" value="12">
        <br>
         <label for="winylowe">Panele winylowe</label>
        <input type="radio" id="winylowe" name="radio" value="14">
        <br>
         <label for="deska">Deska podłogowa</label>
        <input type="radio" id="deska" name="radio" value="18">
        <br>
        <input type="submit" value="Oblicz">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST["szerokosc"])&&isset($_POST["dlugosc"])&&isset($_POST["radio"])){
                    $dlugosc=$_POST["dlugosc"];
                    $szerokosc=$_POST["szerokosc"];
                    $radio=$_POST["radio"];
                    $koszt=$dlugosc*$szerokosc*$radio;
                    echo "Koszt paneli wynosi: ".$koszt;
                }else{
                    echo "Brak wszystkich danych";
                    
                }
            }
        ?>
    </main>
</body>
</html>