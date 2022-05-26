<?php

class Cart
{
    private array $products_list;

    function __construct()
    {
        $this->products_list = [];
    }

    public function getProducts_list()
    {
        return $this->products_list;
    }
 
    public function setProducts_list($product)
    {
        $this->products_list[] = $product;
    }

    public function getCostCart()
    {   
        $total_cost = 0;
        foreach ($this->products_list as $product) {
            if (count($product->getComponent())) {
                $total_cost += $product->getPriceComponent();
            } else {
                $total_cost += $product->getPrice();
            }
        }
        return $total_cost;
    }
}