<?php

class Person
{

    private string $name;
    private int $age;
    private bool $marriage;

    public function __construct(string $firstName, int $age, bool $marriage)
    {
        $this->name = $firstName;
        $this->age  = $age;
        $this->marriage = $marriage;
    }

    public function printDetails() // the function inside a class = method
    {
        echo "First name: " . $this->name . PHP_EOL;
        echo "Age: " . $this->age . PHP_EOL;
        if ($this->marriage === true) {
            echo "Married" . PHP_EOL;
        } else {
            echo "Not Married" . PHP_EOL;
        }
    }

    public function gettingOld()
    {
        $this->age += 1;
    }

    public function __destruct()
    {
        // fclose($file);
    }
}

$john = new Person('John', 20, false);
$john->gettingOld();
$john->printDetails();
