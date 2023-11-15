<?php

require __DIR__ . '/inc/all.php';

$searchValue = @(string)$_GET['search'] ?? '';

// suchlogik

function get_cities_by_search(string $search): ?array
{
global $pdo;

$stmt = $pdo->prepare("SELECT * FROM `cities` WHERE `title` LIKE :title ORDER BY `title` ASC, `zip` ASC");

$stmt->bindValue(':title', "{$search}%");

$stmt->execute();
$cities = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $cities;

}

$cities = get_cities_by_search($searchValue);
var_dump($cities);

render(__DIR__ . '/views/search.view.php', [
    'searchValue'=> $searchValue,
]);

?>