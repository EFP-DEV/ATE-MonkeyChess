<?php
// app/controllers/home.php

function home_index(PDO $pdo): string
{
    $data = [
        'page_title' => 'Monkey Chess',
    ];

    return render('app/views/home.php', $data);
}