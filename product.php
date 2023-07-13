<?php


abstract class Product
{
    protected float $price = 0.0;
    protected string $name = "";
    protected float $deliveryCost = 0.0;

    public function totalCost(): float
    {
        $cost = $this->price + $this->deliveryCost;
        return $cost;
    }
    public abstract function printingDetails(): void;
}



class GraphicsCard extends Product
{
    private int $performanceScore = 0;
    private int $memory = 0;

    public function __construct(int $performanceScore, int $memory, float $price, string $name, float $deliveryCost)
    {
        $this->name = $name;
        $this->price = $price;
        $this->deliveryCost = $deliveryCost;
        $this->performanceScore = $performanceScore;
        $this->memory = $memory;
    }

    public function printingDetails(): void
    {
        echo "Name: " . $this->name . PHP_EOL;
        echo "Total price: " . $this->totalCost() . " $" . PHP_EOL;
        echo "Performance score: " . $this->performanceScore . PHP_EOL;
        echo "Memory size: " . $this->memory . " GB" . PHP_EOL;
    }
}

class MotherBoard extends Product
{
    private int $usbPorts = 0;

    public function __construct(int $usbPorts, string $name, float $price, float $deliveryCost)
    {
        $this->name = $name;
        $this->price = $price;
        $this->deliveryCost = $deliveryCost;
        $this->usbPorts = $usbPorts;
    }

    public function printingDetails(): void
    {
        echo "Name: " . $this->name . PHP_EOL;
        echo "Total price: " . $this->totalCost() . " $" . PHP_EOL;
        echo "Usb ports: " . $this->usbPorts . PHP_EOL;
    }
}

function describeProduct(Product $Product) {
    $Product->printingDetails();
}

$RTX = new GraphicsCard(10000, 6, 1000.0, "RTX5055", 10);
$GigaByte = new MotherBoard(12, "GigaByte-2022", 1500, 10);

describeProduct($RTX);
echo PHP_EOL;
describeProduct($GigaByte);
