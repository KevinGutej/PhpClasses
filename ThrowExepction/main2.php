<?php

class Plant
{
    private float $height;
    private string $plantColor;
    private string $flowerColor;

    public function __construct(float $height, string $plantColor, string $flowerColor)
    {
        $this->height = $height;
        $this->plantColor = $plantColor;
        $this->flowerColor = $flowerColor;
    }

    public function printIfHigherThan(float $height)
    {
        if ($this->height > $height) {
            echo "The plant is higher than the given height.";
        } else {
            echo "The plant your looking for it too short.";
        }
    }
}
