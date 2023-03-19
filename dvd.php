
    <?php

        //child class
       class dvd extends parentclass{

           private $valuestore;

        public function __construct($valuestore)
        {   
            $this->$valuestore=$valuestore;
        }
        //getter and setter for size
        public function getvaluestore(){
            return $this->valuestore;
        }

        public function setvaluestore($valuestore){
            $this->valuestore=$valuestore;
        }

        public function valueofproduct(){

          return  $valuestore=$_POST["size"];
            // echo "the type is DVD Yafanan and the size is ".$size;
        }

        


        
        }
    ?>
 

  









