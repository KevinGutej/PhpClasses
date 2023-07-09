<?php

class Vehicle {
    protected string $producer;
    protected string $model;
}

class Audi extends Vehicle {

    private static string $PRODUCER = 'Audi';

    public function __construct(string $model)
    {
        $this->producer = self::$PRODUCER;
        $this->model = $model;
    }

    public function printDetails():void {
        echo "Producer: " .  self::$PRODUCER;
        echo PHP_EOL;
        echo "Model: " . $this->model;
    }
}

$R8 = new Audi('R8');
$A4 = new Audi('A4');

$R8->printDetails();
echo PHP_EOL;
$A4->printDetails();

?>