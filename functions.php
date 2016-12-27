<?php

class Cart{
    public $price;
    public $products = [];
    public $sales = [
        'apple'=>5,
        'banana'=>10,
        'bread'=>7,
    ];
    public $allProducts=[
        'apple',
        'banana',
        'bread'
    ];

    public function putToCart($product, $cost){
        $found = false;

        foreach ($this->allProducts as $item) {
            if ($item == $product) {
                $found = true;
            }
        }

        if ($found) {
            $this->products[$product]=$cost;

            foreach($this->sales as $sale => $value){
                if($sale == $product){
                    $cost=$cost + $cost/100 * $value;
                }
            }

            $this->price=$this->price + $cost;
        } else {
            echo $product . ' is not found' . PHP_EOL;
        }

    }

    public function totalPrice(){
        echo $this->price .PHP_EOL;
    }
}

$cart= new Cart();
$cart->putToCart ('apple', 15);
$cart->putToCart ('bread', 7);
$cart->putToCart ('orange', 27);


$cart->totalPrice();