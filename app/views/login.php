<!-- app/views/login.php -->

<section>
    <h1>Connexion admin</h1>

    <?php if (!empty($error)): ?>
        <p role="alert">
            <?= escape($error) ?>
        </p>
    <?php endif; ?>

    <form action="/login" method="post">
        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                required
            >
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <button type="submit">Se connecter</button>
    </form>
</section>