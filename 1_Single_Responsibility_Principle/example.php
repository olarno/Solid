<?php
class Order
{
    public function __construct(private array $items)
    {
    }

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function removeItem($item)
    {
        if(($index = array_search($item, $this->items)) !== false) {
            unset($this->items[$index]);
        }
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }

    public function getItems()
    {
        return $this->items;
    }
}

class OrderPrinter
{
    public function printOrder(Order $order)
    {
        $items = $order->getItems();
        echo "Order total: " . $order->getTotal() . PHP_EOL;
        foreach ($items as $item) {
            echo $item->getName(). " - " . $item->getPrice(). PHP_EOL;
        }
    }
}


?>