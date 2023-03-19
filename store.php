    
    <?php


            // $conn = new PDO('mysql:host=localhost; ;dbname=productlist', 
            // 'root', '');
            // // See the "errors" folder for details...
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // require('parentclass.php');
           
            class store {
                
                // public $conn;
                // public $parentclass;

                public function __construct()
                {
                    // $this->parentclass=$parentclass;
                    // $this->conn=null;
                }

                // //getter and setter for objects 
                // public function getparentclass(){
                //     return $this->parentclass;
                // }
                
                // public function setparentclass(parentclass $parentclass){
                //     $this->parentclass=$parentclass;
                // }
                
                // create the connection and store the data in the database
                public function storedb(parentclass $newparent){
                    // $newparent= new parentclass();
                    
                    $sku=$newparent->getsku();
                    $name=$newparent->getname();
                    $price=$newparent->getprice();
                    $selected=$newparent->getselected();
                    $valuestore=$newparent->valueofproduct();
                 
                    // Create connection
                $conn = new mysqli("localhost","root","", "productlist");
                // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // echo "sku=".$sku."name=".$name."price=".$price."selected= ".$selected."valuestore=".$valuestore;

                $sql = "INSERT INTO product (sku, name, price,type,valuestore)
                        VALUES ('$sku', '$name', '$price','$selected','$valuestore')";

                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();



                }
               
            }


    ?>










