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
                    <h3>Contact Form Section</h3>
                    <form id="form" method="post" action="contact.php#form" onsubmit="return validate();">
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="" class="form-control" placeholder="Name"/><br>                                                    
                        </div>
                        <div class="form-group">
                                <input type="text" name="email" id="email" value="" class="form-control" placeholder="Email"/><br>
                                </div>
                                <div class="form-group">
                                <textarea name="message" rows="5" class="form-control" placeholder="Message"></textarea><br>
                                </div>
                                <div class="form-group">
                                <input type="text" name="age" id="age" value="" class="form-control" placeholder="Age"/><br>
                                </div>
                                <div class="checkbox">
                                <input type="checkbox" name="check" /> i am human   
                                </div>
                        <input type="submit" name="submit" class="btn btn-default"/>
                    </form>
                    <div id="errors">
                        
                    </div>
                     <?php include './inc/contactFormConnection.php';?>   
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
        <script src="./js/contactFormValidation.js" type="text/javascript"></script>
        
        
    </body>
    
<!--body - end-->

</html>

<!--html - end-->
