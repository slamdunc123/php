<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>food</title>
        
        <link href="bootstrap-3.3.7/dist/css/bootstrap.theme.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
        
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        // put your code here
        echo "Hello World!";
        $dir = "img";
        $a = scandir($dir);
        print_r($a);
        ?>
        <!--<div>TODO write content</div>-->
        <header>
            
            <div class="row">
                
                <div class="logo">
                    <img src="img/logo-white.png">
                </div>
                
                <ul class="main-nav">
                    <li><a href="">FOOD DELIVERY</a></li>
                    <li><a href="">FOOD ORDERS</a></li>
                    <li><a href="">TESTIMONIALS</a></li>
                    <li><a href="">OUR CITIES</a></li>
                    <li><a href="">SERVICES</a></li>
                </ul>               
                
            </div>
            
            <div class="hero">
                <h1>GOODBYE JUNKFOOD <br>HELLO SUPER HEALTHY MEALS</h1>
                <div class="button-awesome">
                <a href="" class="btn btn-half">Show me more</a>
                <a href="" class="btn btn-full">I am hungry</a>
                </div>
            </div>
        </header>
        
        <section class="features">
            
            <h3 class="text-center">GET FOOD FAST NOT THE FAST FOOD</h3>
            <!--text-center class is found in bootstrap.min - .text-center{text-align:center} -->
            
            <p class="copy">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
            </p>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <i class="fa fa-certificate"></i>
                        <h4>Have Healthy meals</h4>
                        <p class="arranging">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of 
                        </p>
                    </div>
                    
                    <div class="col-md-3">
                        <i class="fa fa-camera"></i>
                        <h4>Have Healthy meals</h4>
                        <p class="arranging">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of 
                        </p>
                    </div>
                    
                    <div class="col-md-3">
                        <i class="fa fa-envelope"></i>
                        <h4>Have Healthy meals</h4>
                        <p class="arranging">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of 
                        </p>
                    </div>
                    
                    <div class="col-md-3">
                        <i class="fa fa-cog"></i>
                        <h4>Have Healthy meals</h4>
                        <p class="arranging">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of 
                        </p>    
                    </div>
                </div>
            </div>
        </section>
        
        <section class="meal">
            <ul class="meal-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="img/1.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/2.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/3.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/4.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/5.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/6.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/7.jpg">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/8.jpg">
                        
                    </figure>
                </li>
                
            </ul>
            
            
        </section>
        
        <section class="mobile">
            
            <h3 class="text-center">HOW IT WORKS AS SIMPLE AS 1,2,3</h3>    <!-- class="text-center" is a predefined Bootstrap class -->
            <div class="container">                                         <!-- class="container" is a predefined Bootstrap class -->
                <div class="row">                                           <!-- class="text-row" is a predefined Bootstrap class -->
                    <div class="col-md-6">                                  <!-- class="text-col-*-*" is a predefined Bootstrap class -->
                        <div class="pic">
                        <img src="img/app-iPhone.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="works-step">
                            <div>1</div>
                            <p>
                                who is such a man as does not want to get success in the life life is not meant for work
                                who is such a man as does not want to get success in the life life is not meant for work
                            </p>
                            <div>2</div>
                            <p>
                                who is such a man as does not want to get success in the life life is not meant for work
                                who is such a man as does not want to get success in the life life is not meant for work
                            </p>
                            <div>3</div>
                            <p>
                                who is such a man as does not want to get success in the life life is not meant for work
                                who is such a man as does not want to get success in the life life is not meant for work
                            </p>
                            
                            <a href=""><img src="img/download_app.svg" alt=""/></a>
                            <a href=""><img src="img/download-app-android.png" alt=""/></a>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="cities">
            <h3 class="text-center">WE ARE CURRENTLY IN THESE CITIES</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="img/san-francisco.jpg">
                        <h4>San Francisco</h4>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        
                    </div>
                    <div class="col-md-3">
                        <img src="img/london.jpg">
                        <h4>London</h4>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        
                    </div>
                    <div class="col-md-3">
                        <img src="img/berlin.jpg">
                        <h4>Berlin</h4>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        
                    </div>
                    <div class="col-md-3">
                        <img src="img/lisbon-3.jpg">
                        <h4>Lisbon</h4>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        <p><i class="fa fa-cog"></i>1000+ Happy customers</p>
                        
                    </div>
                    
                </div>
            </div>
            
        </section>
        
        <section class="testimonials">
            <h3 class="text-center">OUR CUSTOMERS CAN'T LIVE WITHOUT US</h3>
            <div class="container">
            <div class="row">
            <div class="col-md-4">
                           <p>
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                                    
                </p>
                <cite><img src="img/customer-1.jpg">Adil Ahmed</cite>
            
            </div>
                <div class="col-md-4">
            
                <p>
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                                    
                </p>
                <cite><img src="img/customer-1.jpg">Adil Ahmed</cite>
                      </div>
                <div class="col-md-4">
            
                <p>
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                    who is such a man as does not want to get success life is not meant for work
                                    
                </p>
                <cite><img src="img/customer-1.jpg">Adil Ahmed</cite>
            
            </div>
            </div>
                </div>
            
            
        </section>
        
        
        
   
    </body>
</html>
