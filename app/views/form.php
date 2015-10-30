<?php
use Dez\Auth\Hasher\UUID;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dez-PHP Template</title>
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= $url->staticPath( 'css/main.css' ) ?>">
</head>
<body>

<main>

    <article class="body" style="margin: 100px auto;">

        <?= $this->section( 'content' ) ?>

    </article>
</main>

<footer class="footer">
    © Copyright Dez-PHP.
</footer>

<script src="<?= $url->staticPath( 'js/alex-hyrenko-domjs/dom.js' ) ?>"></script>

</body>
</html>