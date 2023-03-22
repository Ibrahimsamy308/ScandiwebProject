<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.css" type="text/css"> 
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
    <title>Product List</title>
       
</head>

<body>
    
          <!-- Main-->
           <div class="py-5 ">
              <div class="container">
                <h4 class="card-title">Product List</h4>

                <form action="delete.php" method="POST">
                
                 <!-- Div Card for show product start from here -->
                 <div class="row hidden-md-up">

                   <?php

                      $conn = new mysqli("localhost","root","", "productlist");
                        // Check connection
                        if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM product ";
                        $result=mysqli_query($conn,$sql);
                        $check =mysqli_fetch_array($result);

                        if(mysqli_num_rows($result) > 0)
                        {

                            foreach ( $result as $result ){

                   ?>

                                  <div  class="col-md-4"> 
                                    <div  class="card">
                                      <input style="margin-left: -60%; margin-top: 2%;" type="checkbox" name="pro_delete_id[]" value="<?= $result['id']; ?>">
                                          
                                          <div class="card-block"  style="text-align: center;">

                                                      <p class="card-subtitle text-muted"> <?= $result['sku']; ?>         </p>
                                                      <p class="card-subtitle text-muted"> <?= $result['name']; ?>        </p>
                                                      <p class="card-subtitle text-muted"> <?= $result['price']; ?> $     </p>
                                                      <p class="card-subtitle text-muted"> <?= $result['valuestore']; ?>  </p>
                                          </div>
                                      </div>
                                  </div>
                                  <?php

                              }
                             }   else
                                     {

                            ?>
                                        <p class="card-subtitle text-muted">No Product Found</p>
                              <?php
                                     }


                                  
                                ?>
                              
                            </div>
                              <div style="text-align: center;">
                                          <br>
                                    <!-- button -->
                                    <a href="productadd.html" type="button" class="btn btn-primary">Add </a>
                                    <button type="submit" name="pro_delete_multiple_btn" class="btn btn-danger">Mass Delete</button>
                             </div>



               
              
                </form>
                        
                        
              </div>
           </div>


                                  
                                
                                    
                                  
                       
                    
                    
        


        

</body>
           

          <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
          <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
    
</html>
