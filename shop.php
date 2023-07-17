
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
    public function buyItem($itemName)
    {
        foreach ($this->items as $item) {
            if ($item['name'] === $itemName) {
                echo "Buying " . $item['name'] . "...\n";
                return;
            }
        }
        echo "Item not available in the shop.\n";
    }
}
