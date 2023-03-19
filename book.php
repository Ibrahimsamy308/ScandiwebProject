
    <?php

    
        // require('parentclass.php');
        //child class
       class book extends parentclass{

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
           
            return $valuestore=$_POST["weight"];
                // echo "the type is Book Yafanan and the weight is ".$weight;
        }
        
        



        
      }
    ?>
 

  









