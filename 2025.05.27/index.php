<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularze cz. 2</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label for="wybor">
        <select name="wybor" id="wybor">
            <option value="Dorian">Dorian</option>
            <option value="Łukasz">Łukasz</option>
            <option value="Patryk">Patryk</option>
        </select>
        <br>
        <input type="submit" value="Wyślij formularz">
    </form>
    <br>
    <?php
        echo "isset ";
        echo isset($_POST["wybor"]);
        echo "<br>";
        echo "empty ";
        echo empty($_POST["wybor"]);
        echo "<br>";
        if (isset($_POST["wybor"])==1){
            echo "Wybrałeś: ".$_POST["wybor"];
        }
        
    ?>
</body>
</html>