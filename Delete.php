    
    <?php

               
                $con = mysqli_connect("localhost","root","","productlist");
                
                    if(isset($_POST['pro_delete_multiple_btn']))
                    {      
                            

                            $all_id = $_POST['pro_delete_id'];
                            $extract_id = implode(',' , $all_id);
                            // echo $extract_id;
                        
                            $query = "DELETE FROM product WHERE id IN($extract_id) ";
                            $query_run = mysqli_query($con, $query);
                        
                            if($query_run)
                            {
                              
                                header("location:index.php");
                            }
                            else
                            {
                               
                                header("location:index.php");
                            }
                    }
    
                                             
                  mysqli_close($con);



    ?>










