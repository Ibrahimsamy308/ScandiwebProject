    
    <?php
              class store {
                
                    public function __construct(){}

                    // create the connection and store the data in the database
                    public function storedb(Product $newparent){

                        // get the data of the object.
                        $sku=$newparent->getsku();
                        $name=$newparent->getname();
                        $price=$newparent->getprice();
                        $selected=$newparent->getselected();
                        $valuestore=$newparent->valueofproduct();
                    
                        // Create connection
                        $conn = new mysqli("localhost","root","","productlist");
                        // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                        $sql = "INSERT INTO product (sku, name, price,type,valuestore)
                                VALUES ('$sku', '$name', '$price','$selected','$valuestore')";

                        if ($conn->query($sql) === TRUE) {
                            // echo"creating object ";
                    
                          header("location:index.php");
                            
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }

                        $conn->close();

                    }   
            }

    ?>










