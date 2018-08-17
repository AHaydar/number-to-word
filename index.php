<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $word = $f->format($_POST["number"]);
}
?>
    <header>
        <h1>
            Welcome!! Would you like to convert a number to a word?
        </h1>
    </header>
    <div>
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            Number: <input name="number">
            <br>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div>
        <br>

        Your word is: <?= $word ?>
    </div>

</body>
</html>
