<?php

function login_index(PDO $pdo, ?string $id = null): string
{
    $error = null;

    if (is_post()) {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($email === 'admin@monkeychess.test' && $password === 'admin') {
            $_SESSION['user_id'] = 1;
            $_SESSION['user_email'] = $email;

            redirect('/admin');
        }

        $error = 'Email ou mot de passe incorrect.';
    }

    return render('app/views/login.php', [
        'error' => $error,
    ]);
}