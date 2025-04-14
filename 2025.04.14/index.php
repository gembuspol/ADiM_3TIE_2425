<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //pętla foreach
        function petlaForeach(){
            $tab1=array("imie"=>"Natalia","nazwisko"=>"Żołądź","wiek"=>20);
            foreach($tab1 as $x =>$y){
                echo "$x: $y <br>";
            }
        }
        //wywolanie funkcji
        petlaForeach();
        //petla for
        function petlaFor(){
            for($liczba=0;$liczba<5;$liczba++){
                echo $liczba."<br>";
            }
        }
        //wywolanie funkcji
        petlaFor();
        //petla while
        function petlaWhile($liczba){
            $klasa=0;
            while($klasa<$liczba){
                echo $klasa."<br>";
                $klasa++;
            }
        }
        //wywolanie funkcji
        petlaWhile(1);

        //funkcja warunkowa
        //składani:
        //if(warunek){ instrukcje w przyapdku prawdy }
        //else{ instrukcje w przypadku fałszu}
        //funkcja warukowa ile cukru może zjeść Dominik 200g to jest maks
        function testCukierDominik($ilosc){
            if($ilosc>200){
                echo "Dominik zjadł za dużo cukru";
            }else if($ilosc==200){
                echo "Dominik zjadł maksymalną dawkę cukru";
            }else{
                echo "Dominik może jeszcze jeść cukier";
            }
        }
        //wywołanie funkcji
        testCukierDominik(300);
    ?>
</body>
</html>