<h2>Sign in</h2>
<p>

    <form action="<?= $url->path( 'auth/sign-in' ) ?>" method="post">

        <label for="auth-email">
            Enter your e-mail
            <input id="auth-email" type="email" name="email">
        </label>

        <label for="auth-email">
            Enter your password
            <input id="auth-email" type="password" name="password">
        </label>

        <input type="submit" class="dark" value="Sign in">
        <input type="reset" class="gray" value="Reset">

    </form>

    <div>
        <a href="<?= $url->path( 'auth/register' ) ?>">Registration</a>
    </div>

</p>