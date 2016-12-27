 <?php

 require 'functions.php';

// class Cart{
// 	public $price;
// 	public $products = [];
// 	public $sales = [
// 		'apple'=>5,
// 		'banana'=>10,
// 		'bread'=>7,
// 	];
// 	public $allMeal=[
// 		'apple',
// 		'banana',
// 		'bread'
// 	];

// 	public function putToCart($product, $cost){
// 		$this->products[$product]=$cost;
// 		$find = false;
// 		foreach($this->allMeal as $all){
// 			if($all !== $product){
// 				$find=true;
// 				echo "$product not find" .PHP_EOL;
// }
// 		}


// 		foreach($this->sales as $sale => $value){
// 			if($sale == $product){
// 				$cost=$cost + $cost/100 * $value;
// 			}
// 		}

// 		$this->price=$this->price + $cost;
// 	}

// 	public function totalPrice(){
// 		echo $this->price .PHP_EOL;
// 	}
// }

// $cart= new Cart();
// $cart->putToCart ('apple', 15);
// $cart->putToCart ('bread', 7);
// $cart->putToCart ('banana', 27);


// $cart->totalPrice();