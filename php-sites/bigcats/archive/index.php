<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!--html - start-->

<html lang="en">

    <!--head - start-->    

    <head>

        <!--title - start-->

        <!--<title>TODO supply a title</title>-->
        <title>Big Cats</title>

        <!--title - end-->

        <!--meta - start-->    

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--meta - end-->

        <!--links - start-->
        <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.theme.min.css" rel="stylesheet">
        <link href="bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- Favicon -->
        <!--<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">-->
        <link rel="icon" href="logo/favicon.ico" type="image/x-icon">

        <!--links - end--> 

    </head>

    <!--head - end-->

    <!--body - start-->

    <body> 
            
        <!--<div>TODO write content</div>-->
        <!--header - start-->

        <header class="header">
            <nav class="navbar navbar-custom" data-spy="affix" data-offset-top="-5">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navi" aria-expanded="false">
                            <!--<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>-->
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                            <a href="#" class="navbar-brand"><img id="logo" src="logo/paw-1290x485.png" alt="" /></a> 
                        
                        <!--<i class="fa fa-camera" aria-hidden="true"></i>-->
                    </div>
                    <div class="collapse navbar-collapse" id="navi">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="">HOME <!--<i class="fa fa-home" aria-hidden="true"></i>--></a></li>                        
                        <li><a href="#about">ABOUT <!--<i class="fa fa-cog" aria-hidden="true"></i>--></a></li>
                        <li><a href="#gallery">GALLERY <!--<i class="fa fa-camera" aria-hidden="true"></i>--></a></li>
                        <li><a href="#key-facts">KEY FACTS <!--<i class="fa fa-gift" aria-hidden="true"></i>--></a></li>
                        <li><a href="#biology">BIOLOGY <!--<i class="fa fa-play" aria-hidden="true"></i>--></a></li>
                        <li><a href="#behaviour">BEHAVIOUR <!--<i class="fa fa-play" aria-hidden="true"></i>--></a></li> 
                        <li><a href="#taxonomy">TAXONOMY <!--<i class="fa fa-play" aria-hidden="true"></i>--></a></li> 
                        <li><a href="#contact">CONTACT <!--<i class="fa fa-phone" aria-hidden="true"></i>--></a></li>
                      </ul>
                    </div>
                </div>
            </nav>
  
            <script src="js/navBar.js">
                
                /*document.addEventListener('click', function(e) {
                   if (e.target.id == 'a') {
                      callback();
                      
                      
                    }
                });
                function callback(){
                  console.log("You clicked...");
                  navi.style.display = "none";
                  exit;
                };*/
    
                //var anchors = document.getElementsByTagName('a');
                
                /*var naviList = document.getElementById('navi');
                var naviDrop = document.getElementById('aNavi');
                naviDrop.addEventListener('click', drop, false);
                naviList.addEventListener('click', list, false);
                
                
                function drop (){
                    if(naviDrop.style.display === "none"){
                        naviDrop.style.display = "block";
                    }else {
                        naviDrop.data-toggle = "collapse";
                    }
                }
                
    
                function list() {
                    if(naviList.style.display === "none"){
                        naviList.style.display = "block";
                    } else{
                        naviList.style.display = "none";
                        
                    }
                    
                }
                
                
                
               //document.getElementsByTagName('a').addEventListener('click', callback,false);
               
               
                
                //function callback(){
                  //console.log("You clicked...");
                  //navi.style.display = "none";
                  //exit;
             // }*/
        </script>
            
            
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-text text-center">
                        <h1>an inside look into the world of big cats</h1>
                        
                    </div>
                    <!--<div class="header-buttons text-center">
                        <a href="" class="btn btn-full">GET IT NOW</a>
                        <a href="" class="btn btn-half">STARTS WORK <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        
                        <!--<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>-->
                    </div>-->
                                        
                </div>
                
         
        </header>

        <!--header - end-->
        
        <!--two column section - start-->

        <section class="two-column text-center text-uppercase" id="about">
            <div class="container">
                <div class="row"> 
                    <h1>ABOUT US</h1>
                    <!--<h3>Two Column Section</h3>-->                                       
                        <div class="col-md-6" id="col1">
                            <!--<h5>Left</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>
                        <div class="col-md-6" id="col2">
                            <!--<h5>Right</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>                           
                </div>
                 <br>
               
                <br>
            </div>
        </section>

        <!--two column section - end-->

        <!--carousel section - start-->

        <section class="carousel-section text-center text-uppercase" id="gallery">
            <div class="container">
                <div class="row">
                    <h1>GALLERY</h1>                    
                        <!--<h3>Carousel</h3>-->                 
                                <div class="col-md-12" id="col1">
                                    
                                    <!--carousel - start-->  
                        
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="">

                                         <!-- Indicators (dot nav) - start-->

                                         <ol class="carousel-indicators">
                                           <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                           <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                           <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                         </ol>

                                         <!-- Indicators (dot nav) - end-->

                                         <!-- Wrapper for slides - start-->

                                         <div class="carousel-inner" role="listbox">
                                           <div class="item active">
                                             <img src="img/subset/lion.jpg" alt="...">
                                             <div class="carousel-caption">
                                                 <h3>Lion</h3>
                                             </div>
                                           </div>
                                           <div class="item">
                                             <img src="img/tiger.jpg" alt="...">
                                             <div class="carousel-caption">
                                               <h3>Tiger</h3>
                                             </div>
                                           </div>
                                             <div class="item">
                                             <img src="img/subset/puma.jpg" alt="...">
                                             <div class="carousel-caption">
                                               <h3>Puma</h3>
                                             </div>
                                           </div>
                                         </div>

                                         <!-- Wrapper for slides - end-->

                                         <!-- Controls - next and prev buttons - start-->

                                         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                           <span class="sr-only">Previous</span>
                                         </a>
                                         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                           <span class="sr-only">Next</span>
                                         </a>

                                         <!-- Controls - next and prev buttons - end -->

                                       </div>            

                                     <!--carousel - end-->
                                </div>                           
                </div>
                <br>
                
                <br>
            </div>
        </section>

        <!--carousel section - end-->
               
        <!--six column section - start-->
        
        <section class="six-column text-center text-uppercase" id="key-facts">
            <div class="container-fluid">
                <div class="row">
                    <h1>KEY FACTS</h1>
                    <!--<h3>Six Column Section</h3>-->
                        <div class="col-md-2" id="col1">
                            <h3>LION</h3>
                            <!--<h5>F Left</h5>-->
                            <img src="img/lion_3.jpg" alt=""/><br><br>
                            <!--<button id="btn" onclick="myFunction(0)">Info <i class="fa fa-angle-down"></i></button>-->
                            <button data-no="0" class="catClass" id="catBtn0">Info <i class="fa fa-angle-down"></i></button>
                            <div id="catInfo0"></div>
                        </div>  
                        <div class="col-md-2" id="col2">
                            <h3>CHEETAH</h3>
                            <!--<h5>Left</h5>-->
                            <img src="img/cheetah_5.jpg" alt=""/><br><br>
                            <!--<button id="btn" onclick="myFunction(1)">Info <i class="fa fa-angle-down"></i></button>-->
                            <button data-no="1" class="catClass" id="catBtn1">Info <i class="fa fa-angle-down"></i></button>
                            <div id="catInfo1"></div>
                        </div> 
                        <div class="col-md-2" id="col3">
                            <h3>PUMA</h3>
                            <!--<h5>L Middle</h5>-->
                            <img src="img/puma_4.jpg" alt=""/></br><br>
                            <!--<button id="btn" onclick="myFunction(2)">Info <i class="fa fa-angle-down"></i></button>-->
                            <button data-no="2" class="catClass" id="catBtn2">Info <i class="fa fa-angle-down"></i></button>
                            <div id="catInfo2"></div>
                        </div> 
                        <div class="col-md-2" id="col4">
                            <h3>JAGUAR</h3>
                            <!--<h5>R Middle</h5>--> 
                            <img src="img/jaguar_6.jpg" alt=""/></br><br>
                            <!--<button id="btn" onclick="myFunction(3)">Info <i class="fa fa-angle-down"></i></button>-->
                            <button data-no="3" class="catClass" id="catBtn3">Info <i class="fa fa-angle-down"></i></button>
                            <div id="catInfo3"></div>
                        </div> 
                        <div class="col-md-2" id="col5">
                            <h3>LEOPARD</h3>
                            <!--<h5>Right</h5>-->
                            <img src="img/leopard_4.jpg" alt=""/></br><br>
                            <!--<button id="btn" onclick="myFunction(4)">Info <i class="fa fa-angle-down"></i></button>-->
                            <button data-no="4" class="catClass" id="catBtn4">Info <i class="fa fa-angle-down"></i></button>
                            <div id="catInfo4"></div>
                        </div> 
                        <div class="col-md-2" id="col6">
                            <h3>TIGER</h3>
                            <!--<h5>F Right</h5>--> 
                            <img src="img/tiger.jpg" alt=""/></br><br>
                            <!--<button id="btn" onclick="myFunction(5)">Info <i class="fa fa-angle-down"></i></button>-->
                            <button data-no="5" class="catClass" id="catBtn5">Info <i class="fa fa-angle-down"></i></button>
                            <div id="catInfo5"></div>
                        </div> 
                </div> 
                 <br>
                
                <br>
            </div>            
        </section>
        
        <!--six column section - end-->

        <!--four column section - start-->

        <section class="four-column text-center text-uppercase" id="biology">
            <div class="container"> 
                <div class="row">
                    <h1>BIOLOGY</h1>
                    <!--<h3>Four Column Section</h3>-->                       
                        <div class="col-md-3" id="col1">
                            <!--<h5>Left</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>
                        <div class="col-md-3" id="col2">
                            <!--<h5>L Middle</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>
                        <div class="col-md-3" id="col3">
                            <!--<h5>R Middle</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>
                        <div class="col-md-3" id="col4">
                            <!--<h5>Right</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>
                </div> 
                 <br>
                
                <br>
            </div>
        </section>

        <!--four column section - end-->
        
        <!--two column section - start-->

        <section class="two-column text-center text-uppercase" id="behaviour">
            <div class="container">
                <div class="row"> 
                    <h1>BEHAVIOUR</h1>
                    <!--<h3>Two Column Section</h3>-->
                        <div class="col-md-8" id="col1">
                            <!--<h5>Left</h5>-->
                                <div class="gallery">
                                    <!--<a href="img/puma_2.jpg"><img src="img/puma_2.jpg" alt=""/></a>
                                    <a ghref="img/ocelot.jpg"><img src="img/ocelot.jpg" alt=""/></a>
                                    <a ghref="img/cheetah_2.jpg"><img src="img/cheetah_2.jpg" alt=""/></a> 
                                    <a ghref="img/lion.jpg"><img src="img/lion.jpg" alt=""/></a>
                                    <a ghref="img/puma.jpg"><img src="img/puma.jpg" alt=""/></a>
                                    <a ghref="img/cheetah.jpg"><img src="img/cheetah.jpg" alt=""/></a>-->
                                    <?php
                                        $search_dir = "img/subset";
                                        $images = glob("$search_dir/*.jpg");
                                        sort($images);
                                        //display images
                                        foreach ($images as $img) {
                                            echo "<img src='$img' height='' width='' /> ";
                                        }
                                    ?>
                                    
                                </div>
                        </div>
                        <div class="col-md-4" id="col2">
                            <!--<h5>Right</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>                           
                </div>
                 <br>
                
                <br>
            </div>
        </section>

        <!--two column section - end-->
                        
        <!--one column section - start-->
       
        <section class="one-column text-center text-uppercase" id="taxonomy">
            <div class="container">
                <div class="row"> 
                    <h1>TAXONOMY</h1>
                    <!--<h3>One Column Section</h3> -->                                      
                        <div class="col-md-12" id="col1">
                            <!--<h5>Right</h5>-->
                            <!--<p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>-->
                            
                           <!--<a href="javascript:loadDoc()" id="demo"><i class="fa fa-angle-down"></i></a>-->
                           <button id="liBtn"><i class="fa fa-angle-down"></i></button>
                            <div id="liInfo"></div>
                            

                            
                        </div>                                           
                </div>
                 <br>
                
                <br>
            </div>
        </section>

        <!--one column section - end-->
        
        <!--three column section - start-->

        <section class="three-column text-center text-uppercase" id="contact">
            <div class="container">
                <div class="row"> 
                    <h1>CONTACT US</h1>
                    <!--<h3>Three Column Section</h3>-->                 
                        <div class="col-md-4" id="col1">
                           <!--<h5>Left</h5>-->
                           <h3>Contact Us</h3>
                            <form id="form" method="post" action="index.php#form" onsubmit="return validate();">
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
                                <input type="submit" name="submit" class="btn btn-default" /> 
                            </form>
                           <div id="errors">
                           </div>                                          
                           <script src="contactFormValidation.js" type="text/javascript"></script>                                   
                           <?php include 'contactFormConnection.php';?>                                 
                                        
                           <!--
                           <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                           
                           <h2>Contact Form</h2>
                           <p>Please contact us via the form below:</p>
                           <form action="" method="post">
                               <div class="form-group">
                                   <input type="text" name="name" class="form-control" placeholder="your name" />                               
                               </div>
                               <div class="form-group">
                                   <input type="text" name="email" class="form-control" placeholder="mail" />                                
                               </div>
                               <div class="form-group">
                                   <textarea name="message" rows="5" class="form-control" placeholder="message..."></textarea>                               
                               </div>
                               <div class="checkbox">                                   
                                   <input type="checkbox" name="check" /> i am human                               
                               </div>                               
                                   <input type="submit" name="submit" class="btn btn-default" value="send message">
                           </form> 
                           -->
                        </div>
                        <div class="col-md-4" id="col2">
                            <!--<h5>Middle</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>
                        <div class="col-md-4" id="col3">
                            <!--<h5>Right</h5>-->
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu venenatis est. Sed nec rutrum eros. Etiam faucibus mi id risus hendrerit cursus. Nulla fringilla, diam in bibendum porta, odio orci ornare lacus, ut ultricies sem dolor et ligula. Pellentesque interdum purus ullamcorper quam iaculis faucibus. Nulla vitae convallis eros. Ut urna turpis, faucibus at tortor a, dignissim aliquam erat. Ut laoreet justo eget quam vestibulum tincidunt sit amet et eros. Ut dapibus, velit ac sollicitudin dapibus, dolor mauris efficitur est, et convallis magna metus id risus. Nunc porta pharetra dolor nec ultrices.
                            </p>
                            <p>
                                Pellentesque accumsan ipsum id consequat sodales. Vivamus malesuada sem a sollicitudin facilisis. Donec turpis quam, tempus eget erat vel, pulvinar condimentum lorem. Sed mollis laoreet felis ut feugiat. Pellentesque sed arcu tortor. Suspendisse aliquet mi et viverra convallis. Sed porta lectus eget vestibulum sagittis. Aenean tempor nisi vel purus consequat accumsan. Maecenas libero dui, malesuada sit amet orci nec, ultricies congue massa. Integer molestie euismod magna.
                            </p>
                        </div>                           
                </div>
                 <br>
                
                <br>
            </div>
        </section>

        <!--three column section - end-->

        <!--footer - start-->

        <footer class="footer">
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-3x"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
            </ul>

        </footer>

        <!--footer - end-->

        <!--footer socket - start-->

        <footer class="footer-socket text-center">
            
                &copy; slamdunc website design
        </footer>

        <!--footer socket - end-->  
        
        <!--external javascript - start-->  
        
        <script src="js/lorumIpsum.js"></script>
        <script src="js/catData.js"></script>
        
        
        <!--external javascript - end-->
        
    </body>
        
    <!--body - end-->

</html>

<!--html - end-->
