<!DOCTYPE html>

<!--html - start-->

<html>
    
    <?php include './inc/head.php';?>
    
<!--body - start-->
    
    <body>
        
        <?php include './inc/header.php';?>
        
        <!--one column section - start-->
        
        <section class="one-column text-center text-uppercase">
            <div class="container">
                <div class="row">
                    <h3>MYSQL Query Section</h3>
                    
                    <?php

                    //include MySQL database connection file
                    
                    require './inc/mysqlConnection.php';
                                 
                    //query variables
                    
                    $sql = "SELECT * FROM CONTACTS";
                    $result = $conn->query($sql);
                    
                    //display query results
                                     
                    if($result->num_rows > 0){
                        echo "<table class='table table-hover table-bordered text-left'>"; //class type comes from bootstrap
                            echo "<tr>";
                                echo "<th>id</th>";
                                echo "<th>name</th>";
                                echo "<th>email</th>";
                                echo "<th>age</th>";
                                echo "<th>message</th>";
                            echo "</tr>";
                        while($row = $result->fetch_assoc()){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['age'] . "</td>";
                                echo "<td>" . $row['message'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table><br>";
                        
                    //free result set
                    $result->free();
                    }
                    
                    //close connection
                    
                    $conn->close();
                    
                    ?>
                    
                  
                </div>                
            </div>            
        </section>
        
        <!--one column section - end-->
        
        <!--two column section - start-->
        
        <section class="two-column text-center text-uppercase">
            <div class="container">
                <div class="row">
                     <h3>Two Column Section</h3>
                        <div class="col-md-6" id="col1">
                            <h5>Left</h5>
                        </div>
                        <div class="col-md-6" id="col2">
                            <h5>Right</h5>                       
                        </div>                       
                    
                </div>
            
            </div>
            
        </section>
        
        <!--two column section - end-->
        
        
        
        <?php include './inc/footer.php';?>
        <script src="contactFormValidation.js" type="text/javascript"></script>
        
        
    </body>
    
<!--body - end-->

</html>

<!--html - end-->
