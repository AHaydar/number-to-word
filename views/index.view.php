<?php require('partials/head.php'); ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    $word = $f->format($_POST["number"]);
}
?>

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
</div>x

<?php require('partials/foot.php'); ?>
