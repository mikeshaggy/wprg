<?php

require_once "Product.php";
class Cart {
    private $products;

    public function __construct() {
        $this->products = array();
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function removeProduct(Product $product) {
        $index = array_search($product, $this->products);
        if ($index !== false) {
            array_splice($this->products, $index, 1);
        }
    }

    public function getTotal() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total;
    }

    public function __toString() {
        $output = "Products in cart: <br>";
        foreach ($this->products as $product) {
            $output .= $product . "<br>";
        }
        $output .= "Total price: " . $this->getTotal();
        return $output;
    }
}

$product1 = new Product("Laptop", 1500, 1);
$product2 = new Product("Phone", 800, 2);

$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);

echo $cart;