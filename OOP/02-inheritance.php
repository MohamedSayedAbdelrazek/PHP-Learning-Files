<?php
#mean we cannot inherits from this class
/*final*/class AppleDevice {

protected $ram='1 GB';
protected $inch='4 inch';
protected $space='16 GB';
protected $color='Silver';

    

public function changeSpec($ram , $inch , $space , $color){
    $this->ram=$ram;
    $this->inch=$inch;
    $this->space=$space;
    $this->color=$color;
}
# to prevent override on this function
/*final*/ public function Print(){
    echo "Ram = ".$this->ram."</br> Inch = ".$this->inch."</br> Space = ".$this->space."</br> Color = ".$this->color."</br>";
}

}

class Sony extends AppleDevice {

    private $camera;

    public function Print(){
        echo "Ram = ".$this->ram."</br> Inch = ".$this->inch."</br> Space = ".$this->space."</br> Color = ".$this->color."</br> Camera = ".$this->camera;
    }

    public function setCamera($camera){
        $this->camera=$camera;
    }
  

}

$iphone6Plus=new AppleDevice();
$iphone6Plus->changeSpec('8GB','7 inch','64GB','black');
$iphone6Plus->print();

echo str_repeat('-',100); echo "</br>";

$sony=new Sony();
$sony->changeSpec('2GB','5 inch','32GB','GOLD');
$sony->setCamera("32GB");
$sony->print();
