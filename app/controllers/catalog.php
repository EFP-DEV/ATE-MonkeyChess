<?php
require __DIR__.'/../models/catalog.php';

function catalog_index($pdo)
{
    $data = [];
    $data['items'] = get_all_items($pdo);

    return render('app/views/catalog.php', $data);
}

function catalog_show(PDO $pdo, ?string $slug = null): string
{
    if ($slug === null) {
        http_response_code(404);

        return render('app/views/404.php', [
            'message' => 'Missing book slug.',
        ]);
    }

    $item = get_one_item($pdo, $slug);

    if (!$item) {
        http_response_code(404);

        return render('app/views/404.php', [
            'message' => 'Book not found.',
        ]);
    }

    return render('app/views/item.php', [
        'item' => $item,
    ]);
}