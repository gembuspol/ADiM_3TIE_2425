<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla foreach</title>
</head>
<body>
    <header>
        <?php
            $tablica=array(40,56,"Piotr","Dominik");
            //wypisanie tablicy za pomocą funkcji print_r
            print_r($tablica);
            echo "<br>";
            //wypisanie tablicy z wykorzystaniem pętli while
            $i=0;
            while($i<count($tablica)){
                echo $tablica[$i].", ";
                $i++;
            }
            echo "<br>";
            //wypisanie tablicy za pomocą pętli for
            for($x=0;$x<count($tablica);$x++){
                echo $tablica[$x]." - ";
            }
            echo "<br>";
            //wypisanie tablicy za pomocą pętli foreach
            foreach($tablica as $element){
                echo $element." * ";
            }
            echo "<br>";
            //deklacja tablicy asocjacyjnej
            $asoscjacyjna=array("imie"=>"Piter","nazwisko"=>"Kowalski", "wiek"=>30,"prawoJazdy"=>"Nie");
            //wypisanie za pomocą pętli foreach
            foreach($asoscjacyjna as $klucz => $wartosc){
                echo "Klucz o nazwie $klucz ma wartośc $wartosc <br>";
            }

        ?>
    </header>
</body>
</html>