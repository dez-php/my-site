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

<header class="header">
    <section class="header-logo">
        <a href="/">Dez-PHP</a>
    </section>
    <nav class="header-menu">
        <a href="<?= $url->path( '' ) ?>">Главная</a>
        <a href="<?= $url->path( 'post/all' ) ?>">Публикации</a>
        <a href="<?= $url->path( 'source' ) ?>">CodePaste</a>
        <a href="<?= $url->path( 'about-me' ) ?>">Обо мне</a>
        <?php if( $auth->isGuest() ): ?>
            <a href="<?= $url->path( 'auth/sign-in' ); ?>">Войти</a>
        <?php else: ?>
            <a href="<?= $url->path( 'auth/logout' ); ?>">Logout</a>
        <?php endif; ?>
    </nav>
</header>

<main>
    <menu class="menu">
        <h2>Menu header</h2>
        <ul>
            <li>
                <a>Item 1</a>
            </li>
            <li>
                <a>Item 2</a>
            </li>
            <li>
                <a>Item 3</a>
            </li>
        </ul>

        <h2>Menu header 2</h2>
        <ul>
            <li>
                <a class="active">Item 1</a>
            </li>
            <li>
                <a>Item 2</a>
            </li>
            <li>
                <a>Item 3</a>
            </li>
        </ul>
    </menu>
    <article class="body">

        <?php foreach( $flash->getMessages() as $type => $messages ): ?>
            <?php foreach( $messages as $message ): ?>
                <div class="flash-message flash-message-<?= $type ?>">
                    <?= $message ?>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <?= $this->section( 'content' ) ?>

    </article>
</main>

<footer class="footer">
    © Copyright Dez-PHP.
</footer>

<script src="<?= $url->staticPath( 'js/alex-hyrenko-domjs/dom.js' ) ?>"></script>

</body>
</html>