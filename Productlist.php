    
    <?php
        require('parentclass.php');
        require('dvd.php');
        require('book.php');
        require('furniture.php');
        require('store.php');
        require('delete.php');


        // creating an object
        $newobject= new $_POST["typeswitcher"]($_POST["sku"],$name=$_POST["name"],$price=$_POST["price"],$selected=$_POST["typeswitcher"]);
        $newobject->setsku($_POST["sku"]);
        $newobject->setname($_POST["name"]);
        $newobject->setprice($_POST["price"]); 
        $newobject->setselected($_POST["typeswitcher"]);
          
        $storedata =new store();
        $storedata->storedb($newobject);

    ?>

   










