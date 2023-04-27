
    <?php

       //child class
       class Furniture extends Product{

           private $valuestore;
           

        public function __construct($valuestore)
        {   
            $this->$valuestore=$valuestore;
            
        }

        //getter and setter for weight
        public function getvaluestore(){
            return $this->valuestore;
        }

        public function setvaluestore($valuestore){
            $this->valuestore=$valuestore;
        }
        
        public function valueofproduct(){
          
           
            return   $valuestore="Dimension:".$_POST["height"]."*".$_POST["width"]."*".$_POST["lenght"];
            
        }
      }
    ?>
 

  









