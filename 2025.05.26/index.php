<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze</title>
</head>
<body>
    <header>
        <h1>Przesyłanie formularza</h1>
</header>
<main>
    <form method="POST" action="index.php">
        <label for="imie">Podaj imię</label>
        <input type="text" id="imie" name="imie"><br>
        <label for="wiek">Podaj wiek</label>
        <input type="number" id="wiek" name="wiek"><br>
        <input type="submit" value="Wyślij">
    </form>
</main>
<section id="wynik">
    <?php
    echo "Witaj ".$_POST["imie"].". Masz ".$_POST["wiek"]." lat";
    ?>
</section>
    
</body>
</html>