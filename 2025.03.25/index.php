<!DOCTYPE html>
<html lang=pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for i pętla while</title>
</head>
<body>
    <?php
        for($x=1;$x<=30;$x++){
            echo $x."<br>";
        }
        for($x=50;$x>=20;$x=$x-3){
            echo $x."<br>";
        }
        //wykorzystanie pętli while - pętla dziła do momentu gdy warunek pętli jest prawdziwy. Pętla while jest wykorzystywana zazwyczaj gdy nie wiemy ile dokładnie razy się coś wykona
        $x=1;
        while($x<=30){
            echo $x."<br>";
            $x++;
        }
        $x=50;
        while($x>=20){
            echo $x."<br>";
            $x=$x-3;
        }
        //wypisawnie zawartości tablicy
        $tablica=array(5,"tablica","kot",12.446,18000,60,"Beju","Denys");
        for($i=0;$i<count($tablica);$i++){
            echo $tablica[$i];
            echo ", ";
        }
        echo "<br>";
        $i=0;
        while($i<count($tablica)){
            echo $tablica[$i];
            echo " - ";
            $i++;
        }
    ?>
</body>
</html>