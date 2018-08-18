<?php require('partials/head.php'); ?>

<h3>Enter a number, and click submit </h3>

<div>
    <form method="post" action="/">
        Number: <input name="number">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<div>
    <br>

    <?= $number ?> is transformed to the following word: <?= $word ?>
</div>

<?php require('partials/footer.php'); ?>

