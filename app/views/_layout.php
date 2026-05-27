<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>
    Monkey Chess<?= !empty($page_title) ? ' - ' . escape($page_title) : ''; ?>
  </title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Catalog of fictional books about monkey chess.">
</head>

<body>
  <header>
    <p>
      <a href="/">
        <strong>Monkey Chess Library</strong>
      </a>
    </p>

    <nav aria-label="Main navigation">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/catalog">Catalog</a></li>
        <li><a href="/catalog/show/1">Featured book</a></li>

        <?php if (empty($_SESSION['user_id'])): ?>
          <li><a href="/login">Login</a></li>
        <?php else: ?>
          <li><a href="/admin">Admin</a></li>
          <li><a href="/logout">Logout</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <main>
    <?= $page_content ?>
  </main>

  <footer>
    <p>Monkey Chess Library is a fictional project for learning HTML and PHP.</p>
  </footer>
</body>
</html>