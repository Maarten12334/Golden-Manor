<?php

declare(strict_types=1);

namespace GoldenManor;

final class Product implements \Stringable
{
    public function __construct(
        public string $name,
        public int $saleDays,
        public int $worth
    ) {
    }

    public function __toString(): string
    {
        return (string) "{$this->name}, {$this->saleDays}, {$this->worth}";
    }
}
