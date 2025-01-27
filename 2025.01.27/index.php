<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwszy program w PHP</title>
</head>
<body>
    <header>
        Pierwszy program
    </header>
    <main>
        <?php
            echo "Witajcie w świecie PHP";
            echo "<br>";
            echo 5+3/5*2;
            $skibidi=55;
            $tego=32;
            echo "<br>Iloraz liczb ".$skibidi." i ".$tego." wynosi: ";
           
            echo $skibidi/$tego;
            $imie="Przemek";
            echo "<br>Witaj na stronie, $imie";
        ?>
    </main>
    <footer>
        Stronę wykonał Przemek
    </footer>
</body>
</html>