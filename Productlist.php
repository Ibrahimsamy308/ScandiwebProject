    
    <?php
    require('parentclass.php');
    require('dvd.php');
    require('book.php');
    require('furniture.php');
    require('store.php');
    // require('gettype.php');


        // $sku=$_POST["sku"];
        // $name=$_POST["name"];
        // $price=$_POST["price"];
        // $selected=$_POST["typeswitcher"];
        // $size=$_POST["selected-size"];
        // echo "the val".$size;


        $newwww = new $_POST["typeswitcher"]($_POST["sku"],$name=$_POST["name"],$price=$_POST["price"],$selected=$_POST["typeswitcher"]);
        $newwww->setsku($_POST["sku"]);
        $newwww->setname($_POST["name"]);
        $newwww->setprice($_POST["price"]); 
        $newwww->setselected($_POST["typeswitcher"]);
        // $newwww->valueofproduct();
        // echo "after set the data";

        $storedata =new store();
        $storedata->storedb($newwww);
    //    echo"the sku".$newwww->getsku();

    // $newwww = new dvdchild('','','','');
    // $newwww->settersku($_POST["sku"]);
    // $newwww->type();
    
    // $newwww1 = new bookchild('','','','');
    // $newwww1->settersku($_POST["sku"]);
    // $newwww1->type();


    // echo "the data of the object".$newwww->getsku()."the secand sku ".$newwww1->getsku();
    // $newchild= new bookchild('');
    // $newchild->type();
    
    ?>

    <?php
     
     

        // $sku=$_POST["sku"];
        // $name=$_POST["name"];
        // $price=$_POST["price"];
        // $selected=$_POST["typeswitcher"];

        // if($selected=='dvd'){
        //     $size=$_POST['size'];

        // } elseif($selected=='book'){
        //     $size=$_POST['weight'];

        // } elseif($selected=='furniture'){
        //     $fheight=$_POST['fheight'];
        //     $fweight=$_POST['fwidth'];
        //     $flenght=$_POST['flenght'];

        //     $size= $fheight."*". $fweight."*". $flenght;

        // }


        // echo " the sku =    ".$sku." ".$name." ".$price." ".$selected." %the size ".$size;

        // // Create connection
        // $conn = new mysqli("localhost","root","", "productlist");
        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // $sql = "INSERT INTO product (sku, name, price,type,size)
        //           VALUES ('$sku', '$name', '$price','$selected','$size')";

        // if ($conn->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }

        // $conn->close();


 
    ?>










