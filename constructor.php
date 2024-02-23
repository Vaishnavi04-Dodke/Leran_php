<?php
class calculation{
  public  $a,$b,$c;

function __construct($a,$b){
$this->a=$a;
$this->b=$b;
}
function sum(){
    $this->c=$this->a+$this->b;
    return $this->c;
}
function sub(){
    $this->c=$this->a-$this->b;
    return $this->c;
}
}
// first object
$c=new calculation(10,20);
echo "The sum of ".$c->a." & ".$c->b." is :". $c->sum(). ". <br>";
$c=new calculation(50,20);
echo "The sub of ".$c->a." & ".$c->b." is :". $c->sub(). ".<br>";
// second object
$c1=new calculation(100,20);
echo "The sum of ".$c1->a." & ".$c1->b." is :". $c1->sum(). ". <br>";
$c2=new calculation(500,200);
echo "The sub of ".$c1->a." & ".$c1->b." is :". $c1->sub(). ".<br>";
?>