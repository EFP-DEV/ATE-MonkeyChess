<?php
require __DIR__.'/../models/catalog.php';

function catalog_index($pdo)
{
    $data = [];
    $data['items'] = get_all_items($pdo);

    return render('app/views/catalog.php', $data);
}

function catalog_show($pdo)
{
    $data = [];
    $data['item'] = get_one_item($pdo);

    return render('app/views/item.php', $data);
}