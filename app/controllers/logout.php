<?php

function logout_index(PDO $pdo, ?string $id = null): string
{
    $_SESSION = [];

    session_destroy();

    redirect('/');
}