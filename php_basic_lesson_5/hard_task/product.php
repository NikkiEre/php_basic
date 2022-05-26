<?php

class Product
{
    private string $title;
    private float $price;
    private array $component = [];

    function __construct(string $title, float $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($newTitle)
    {
        $this->title = $newTitle;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function getComponent()
    {
        return $this->component;
    }

    public function setComponent($product)
    {
        $this->component[] = $product;
    }

    public function getPriceComponent()
    {
        $totalCost = $this->price;
        if(count($this->component)) {
            foreach ($this->component as $product) {
                $totalCost += $product->price;
            }
        }
        return $totalCost;
    }
}