<?php
interface car{
    public function makeyear();
}
interface model{
    public function model();
}
class year implements car{
public function makeyear(){
echo '<h1>2023</h1>';
 }
}
class model1 implements model{ 
    public function model()
    {
        echo '<h1>BMW</h1>';
    }
}
$car = new year();
$car -> makeyear();
$model = new model1();
 $model -> model();
