<html >

<head>
    <meta charset="UTF-8">

    <!-- Title Page-->
    <title>Product Add</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-body">
                   
                    <form   method="POST"  action="Productlist.php">
                        <h2 class="title">Product</h2>
                        <hr>
                  
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="SKU" name="sku"   >
                            <span id="alr_sku" class="input-group hidden" style=" color: red;border-bottom: none;">The sku is already here !!!</span>
                            <span id="emp_sku" class="input-group hidden" style=" color: red;border-bottom: none;">The sku is empty...!!!</span>                        
                        </div>

                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name"  >
                            <span id="emp_name" class="input-group hidden" style=" color: red;border-bottom: none;">The name is empty...!!!</span>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-2" type="number" placeholder="Price($)" name="price" >
                            <span id="emp_pri" class="input-group hidden" style=" color: red;border-bottom: none;">The price is empty...!!!</span>
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="typeswitcher" onchange="showDiv(this)" >
                                    <option disabled="disabled" selected="selected" >Type Switcher</option>
                                    <option    value="dvd" >DVD</option>
                                    <option    value="furniture">Furniture</option>
                                    <option    value="book">Book</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                            <span id="emp_typ" class="input-group hidden" style=" color: red;border-bottom: none;">The Type Switcher is empty...!!!</span>
                        </div>

                        <!-- categories of div hidden  -->
                        <div id="dvd"  class="input-group hidden">
                            <input class="input--style-2" type="number" placeholder="Size(MB)" name="size"  >
                            <span id="emp_size" class="input-group hidden" style=" color: red;border-bottom: none;">The Size is empty...!!!</span>
                        </div>

                        <div id="book" class="input-group hidden">
                            <input class="input--style-2" type="number" placeholder="Weight (KG)" name="weight"  >
                            <span id="emp_weight" class="input-group hidden" style=" color: red;border-bottom: none;">The weight is empty...!!!</span>
                        </div>

                        <div id="furniture" class="input-group hidden">
                            <input class="input--style-2" type="number" placeholder="Height(CM)" name="height" >
                            <span id="emp_hei" class="input-group hidden" style=" color: red;border-bottom: none;">The height is empty...!!!</span>
                            <hr>
                            <input class="input--style-2" type="number" placeholder="Width(CM)" name="width" >
                            <span id="emp_wid" class="input-group hidden" style=" color: red;border-bottom: none;">The width is empty...!!!</span>
                            <hr>
                            <input class="input--style-2" type="number" placeholder="Lenght(CM)" name="lenght" >
                            <span id="emp_len" class="input-group hidden" style=" color: red;border-bottom: none;">The length is empty...!!!</span>
                        </div>

                          <!-- Buttons  -->
                            <div class="p-t-20" >
                                <button  class="btn btn--radius btn--new" type="submit" name="sign-up">Add</button>
                            </div>  

                            <div class="p-t-20">
                                <!-- <a href="productadd.html" class="btn btn--radius btn--new" style="text-decoration: none;" type="cancel" >Cancel</a> -->
                                <button class="btn btn--radius btn--new" style="text-decoration: none;" type="reset" value="reset" >Cancel</button>
                            </div>
                     
                      

                       

                        


                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function showDiv(select){
           if(select.value=='dvd'){
            document.getElementById('dvd').style.display = "block";
            document.getElementById('furniture').style.display = "none";
            document.getElementById('book').style.display = "none";
           }  else if(select.value=='furniture'){
            document.getElementById('furniture').style.display = "block";
            document.getElementById('dvd').style.display = "none";
            document.getElementById('book').style.display = "none";
           }
           else if(select.value=='book'){
            document.getElementById('book').style.display = "block";
            document.getElementById('furniture').style.display = "none";
            document.getElementById('dvd').style.display = "none";
           }else{
            document.getElementById('dvd').style.display = "none";
            document.getElementById('furniture').style.display = "none";
            document.getElementById('book').style.display = "none";
           }
        } 
        </script>

               

        <script>
               document.forms[0].onsubmit= function(e){
              
                let fsku = true;
                let skuvalidation = true;
                let namevalidation = true;
                let pricevalidation = true;
                let selectvalidation = false;
                // flags for the dimensions size,width,.........
                let fdimvalidation = true;
                let sdimvalidation = true;
                let rdimvalidation = true;

                let skuinput = document.querySelector("[name='sku']");
                let nameinput = document.querySelector("[name='name']");
                let priceinput = document.querySelector("[name='price']");
                let selectinput = document.querySelector("[name='typeswitcher']");
                // console.log(skuinput.value);

                // if the sku is empty
                if(skuinput.value ==="" ){
                    skuvalidation= false;    
                    document.getElementById('emp_sku').style.display = "block";
                }
                 // if the name is empty
                 if(nameinput.value ==="" ){
                    namevalidation= false;
                    document.getElementById('emp_name').style.display = "block";
                }
                 // if the price is empty
                 if(priceinput.value ==="" ){
                    pricevalidation= false;
                    document.getElementById('emp_pri').style.display = "block";
                }
                // if the Select is empty
                // console.log(selectinput.value);
                // console.log("the seee "+selectvalidation);
                // if the select 
              
                if(selectinput.value ==="dvd" ||selectinput.value ==="book"||selectinput.value ==="furniture" ){
                    selectvalidation= true;
                    if(selectinput.value ==="dvd"){
                    let sizeinput = document.querySelector("[name='size']");
                    if(sizeinput.value===""){
                        fdimvalidation=false;
                        document.getElementById('emp_size').style.display = "block";
                    }
                }
                if(selectinput.value ==="book"){
                    let weiinput = document.querySelector("[name='weight']");
                    if(weiinput.value===""){
                        fdimvalidation=false;
                        document.getElementById('emp_weight').style.display = "block";
                    }
                }
                if(selectinput.value ==="furniture"){
                    let heinput = document.querySelector("[name='height']");
                    let weinput = document.querySelector("[name='width']");
                    let leinput = document.querySelector("[name='lenght']");

                    if(heinput.value===""){
                        fdimvalidation=false;
                        document.getElementById('emp_hei').style.display = "block";
                    }
                    if(weinput.value===""){
                        sdimvalidation=false;
                        document.getElementById('emp_wid').style.display = "block";
                    }
                     if(leinput.value===""){
                        rdimvalidation=false;
                        document.getElementById('emp_len').style.display = "block";
                    }


                }

                }else{
                    document.getElementById('emp_typ').style.display = "block";
                }


                // if the sku is in the database
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
                          
                            
                                if('<?php echo $result['sku'] ?>' === skuinput.value)
                                {
                                    fsku=false;
                                    document.getElementById('alr_sku').style.display = "block";
                                   
                                }
                               <?php
                        
                            }
                        }
                       
                    ?>  
        
                //  console.log(skuvalidation);
                //  console.log(namevalidation);
                //  console.log(pricevalidation);
                //  console.log(selectvalidation);
                //  console.log(fsku);

                if(skuvalidation ===false || fsku ===false || pricevalidation ===false||selectvalidation===false || 
                fdimvalidation=== false || sdimvalidation===false || rdimvalidation=== false){
                    e.preventDefault();
                }
            }


        </script>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>
