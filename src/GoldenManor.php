<?php

declare(strict_types=1);

namespace GoldenManor;

final class GoldenManor
{
    /**
     * @param Product[] $products
     */
    public function __construct(
        private array $products
    ) {
    }

    public function refreshWorth(): void
    {
        foreach ($this->products as $product) {
            if ($product->name !== 'Vintage Cheddar' and $product->name !== 'Grand Event tickets to a FLKAPL90FTG performance') {
                if ($product->worth > 0) {
                    if ($product->name !== 'Eternal Ember, Grip of Thoralon') {
                        $product->worth = $product->worth - 1;
                    }
                }
            } else {
                if ($product->worth < 50) {
                    $product->worth = $product->worth + 1;
                    if ($product->name === 'Grand Event tickets to a FLKAPL90FTG performance') {
                        if ($product->saleDays < 11) {
                            if ($product->worth < 50) {
                                $product->worth = $product->worth + 1;
                            }
                        }
                        if ($product->saleDays < 6) {
                            if ($product->worth < 50) {
                                $product->worth = $product->worth + 1;
                            }
                        }
                    }
                }
            }
            if (str_contains($product->name, 'Enchanted')) {  #Added enchanted tag
                if ($product->worth > 0) {
                    $product->worth = $product->worth - 2;
                }
            }
            if ($product->name !== 'Eternal Ember, Grip of Thoralon') {
                $product->saleDays = $product->saleDays - 1;
            }

            if ($product->saleDays < 0) {
                if ($product->name !== 'Vintage Cheddar') {
                    if ($product->name !== 'Grand Event tickets to a FLKAPL90FTG performance') {
                        if ($product->worth > 0) {
                            if ($product->name !== 'Eternal Ember, Grip of Thoralon') {
                                $product->worth = $product->worth - 1;
                            }
                        }
                    } else {
                        $product->worth = $product->worth - $product->worth;
                    }
                } else {
                    if ($product->worth < 50) {
                        $product->worth = $product->worth + 1;
                    }
                }
            }
        }
    }
}
