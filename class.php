<?php
// create class

class Calcualtion{
    public $a,$b,$c;  //properties

    // method
    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }

}
// object create
$c1=new Calcualtion();
$c1->a=20;
$c1->b=30;
 echo $c1->sum();
 echo"<br>";
 echo $c1->sub();
 echo"<br>";
 $c2=new Calcualtion();
$c2->a=50;
$c2->b=30;
 echo $c2->sum();
 echo"<br>";
 echo "The sub of C2 obejct is ".$c2->sub();
?>