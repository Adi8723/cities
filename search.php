<?php

require __DIR__ . '/inc/all.php';

$searchValue = @(string)$_GET['search'] ?? '';

$cities = get_cities_by_search($searchValue);

render(__DIR__ . '/views/search.view.php', [
    'searchValue' => $searchValue,
    'cities' => $cities,
]);
