    
    <?php

               
                $con = mysqli_connect("localhost","root","","productlist");
                
                    if(isset($_POST['stud_delete_multiple_btn']))
                    {      
                            

                            $all_id = $_POST['pro_delete_id'];
                            $extract_id = implode(',' , $all_id);
                            // echo $extract_id;
                        
                            $query = "DELETE FROM product WHERE id IN($extract_id) ";
                            $query_run = mysqli_query($con, $query);
                        
                            if($query_run)
                            {
                              
                                header("location:http://localhost/Scandiweb/home.php");
                            }
                            else
                            {
                               
                                header("location:http://localhost/Scandiweb/home.php");
                            }
                    }
    
                                             
                  mysqli_close($con);



    ?>










