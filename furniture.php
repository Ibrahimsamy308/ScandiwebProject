
    <?php

        //child class
       class furniture extends parentclass{

           private $height;
           private $width;
           private $lenght;
           private  $valuestore;

        public function __construct($height,$width,$lenght)
        {   
            $this->$height=$height;
            $this->$width=$width;
            $this->$lenght=$lenght;
        }

        //getter and setter for height
        public function getheight(){
            return $this->height;
        }

        public function setheight($height){
            $this->height=$height;
        } 

        //getter and setter for width
        public function getwidth(){
            return $this->width;
        }

        public function setwidth($width){
            $this->width=$width;
        }

        //getter and setter for lenght
        public function getlenght(){
            return $this->lenght;
        }

        public function setlenght($lenght){
            $this->lenght=$lenght;
        }

        // getter and setter for all the dimension
        public function getvaluestore(){
            return $this->valuestore;
        }

        public function setvaluestore($valuestore){
            $this->valuestore=$valuestore;
        }

        public function valueofproduct(){

                $height=$_POST["height"];
                $width=$_POST["width"];
                $lenght=$_POST["lenght"];
                $valuestore="Dimension:" .$height."*".$width."*".$lenght;
                return $valuestore;
        }
        


        
     }

    ?>

  









