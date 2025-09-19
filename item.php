<?php 
class Item {
    private $name;
    private $img; 
    private $qty;
    private $price;
    private $desc;

    public function __construct($name, $img, $qty, $price, $desc) {
        $this->name = $name;
        $this->img = $img;
        $this->qty = $qty = 0;
        $this->price = $price;
        $this->desc = $desc;
    }

    public function getName(){
        return $this->name;
    }

    public function getImg(){
        return $this->img;
    }

    public function getQty(){
        return $this->qty;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getDesc(){
        return $this->desc;
    }

    public function addQty(){
        $this->qty += 1;
    }
    
    public function changeQty($qty){
        $this->qty = $qty; 
    }


}
?>