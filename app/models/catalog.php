<?php

function get_all_items($pdo)
{
    $sql = 'SELECT * FROM item';
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

function get_one_item($pdo)
{
    $sql = 'SELECT * FROM item WHERE slug = ?';
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}
