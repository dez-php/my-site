<h2>Sign up</h2>
<p>

    <form action="<?= $url->path( 'auth/register' ) ?>" method="post">

        <label for="auth-email">
            Enter your e-mail
            <input id="auth-email" type="email" name="email">
        </label>

        <label for="auth-email">
            Enter your password
            <input id="auth-email" type="password" name="password">
        </label>

        <input type="submit" value="Registration">

    </form>

    <div>
        Already with us ? <a href="<?= $url->path( 'auth/sign-in' ) ?>">Signin!</a>
    </div>

</p>