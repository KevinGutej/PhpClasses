
<?php

class Shop
{
    private $items = array();
    
    public function __construct()
    {
        $this->items = array(
            array(
                'name' => 'Apple',
                'price' => 2
            ),
            array(
                'name' => 'Banana',
                'price' => 1
            ),
            array(
                'name' => 'Ball',
                'price' => 15
            )
        );
    }
}