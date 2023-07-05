<?php

class Car
{
    private float $price;
    private string $brand;
    private string $color;

    public function __construct(float $price, string $brand, string $color)
    {
        $this->price = $price;
        $this->brand = $brand;
        $this->color = $color;
    }

    public function priceHigherThan(float $price)
    {
        if ($this->price > $price) {
            echo "The price is more than the given price";
        } else {
            echo "No cars with that price";
        }
    }
}


$price = 35000;

$audi = new Car(20000, "audi", "black");
$ford = new Car(35000, "ford", "red");
$audi->priceHigherThan($price);
echo PHP_EOL;
$ford->priceHigherThan($price);
