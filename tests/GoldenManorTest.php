<?php

declare(strict_types=1);

namespace Tests;

use GoldenManor\GoldenManor;
use GoldenManor\Product;
use PHPUnit\Framework\TestCase;

class GoldenManorTest extends TestCase
{
    public function testFoo(): void
    {
        $products = [new Product('foo', 0, 0)];
        $goldenManor = new GoldenManor($products);
        $goldenManor->refreshWorth();
        $this->assertSame('foo', $products[0]->name); #fixme naar foo veranderd
    }
}
