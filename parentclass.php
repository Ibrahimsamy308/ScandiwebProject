
<?php

//parent class
 abstract class parentclass{

       private $sku;
       private $name;
       private $price;
       private $selected;

       public function __construct($sku,$name,$price,$selected){

           $this->$sku=$sku;
           $this->$name=$name;
           $this->$price=$price;
           $this->$selected=$selected;

       }

     //getter and setter for sku
      public function getsku(){
           return $this->sku;
       }

       public function setsku($sku){
           $this->sku=$sku;
       }

       //getter and setter for name
       public function getname(){
           return $this->name;
       }

       public function setname($name){
           $this->name=$name;
       }

       //getter and setter for price
       public function getprice(){
           return $this->price;
       }

       public function setprice($price){
           $this->price=$price;
       }
       //getter and setter for selected
       public function getselected(){
           return $this->selected;
       }

       public function setselected($selected){
           $this->selected=$selected;
       }

       
       public function valueofproduct(){

           
       }

   
}
?>












