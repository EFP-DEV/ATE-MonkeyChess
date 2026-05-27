<?php
require_once __DIR__ . '/../models/operator.php';

function login_index(PDO $pdo, ?string $id = null): string
{
    $error = null;

    if (is_post()) {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $operator = operator_find_by_email($pdo, $email);

        if ($operator && password_verify($password, $operator['password'])) {
            set_logged($operator);
            redirect('/admin');
        }

        $error = 'Email ou mot de passe incorrect.';
    }

    return render('app/views/login.php', [
        'error' => $error,
    ]);
}