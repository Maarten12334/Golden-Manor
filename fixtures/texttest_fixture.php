<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use GoldenManor\GoldenManor;
use GoldenManor\Product;

echo 'Well hello there!' . PHP_EOL;

$products = [
    new Product('+7 Agility Tunic', 10, 20),
    new Product('Vintage Cheddar', 2, 0),
    new Product('Potion of the Panther', 5, 7),
    new Product('Eternal Ember, Grip of Thoralon', 0, 80),
    new Product('Eternal Ember, Grip of Thoralon', -1, 80),
    new Product('Grand Event tickets to a FLKAPL90FTG performance', 15, 20),
    new Product('Grand Event tickets to a FLKAPL90FTG performance', 10, 49),
    new Product('Grand Event tickets to a FLKAPL90FTG performance', 5, 49),
    // Now works
    new Product('Enchanted Arcane Pastry', 3, 6),
];

$app = new GoldenManor($products);

$days = 2;
if ((is_countable($argv) ? count($argv) : 0) > 1) {
    $days = (int) $argv[1];
}

for ($i = 0; $i < $days; $i++) {
    echo "-------- day ${i} --------" . PHP_EOL;
    echo 'name, sellIn, quality' . PHP_EOL;
    foreach ($products as $product) {
        echo $product . PHP_EOL;
    }
    echo PHP_EOL;
    $app->refreshWorth();
}
