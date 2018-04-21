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
                    <h3>One Column Section</h3>
                    
                        <?php 
        
                            function sayHello($fName, $lName, $age){
                                echo "Hello $fName" . " " . "$lName." . "<br>You are $age years old.";
                            }

                            sayHello("Duncan","Laidlaw",47);

                            ?>

                            <?php

                            function addNumbers($num1,$num2){
                                return $num1*$num2;
                            }

                            echo addNumbers (4,5);

                            $myNum = 10;


                            function addFive(&$num){
                                $num += 5;
                            }

                            addFive($myNum);
                            echo "Value: $myNum";


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
    
    </body>
    
<!--body - end-->

</html>

<!--html - end-->
