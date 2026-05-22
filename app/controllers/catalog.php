<?php
require __DIR__.'/../models/catalog.php';

function catalog_index($pdo)
{
    $data = [];
    $data['items'] = get_all_items($pdo);
    var_dump($data['items']);die;
    return render('app/views/catalog.php', $data);
}