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
        
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.0.0/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-HOjmaybB3GQTM8HunY46MvK7ngm9b/eRGOWESCQ/s+Vk4omobTY5+FXqurpSFcbz" crossorigin="anonymous">
        <link href="header.css" rel="stylesheet" type="text/css">
        <title>BFC</title>        
    </head>
    <body>
        
        <section class="header">
            
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top my-navbar">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#gigs">Gigs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
            
        </section>
        
        <section class="jumbotron" id="home">
              <div class="jumbotron">
                <h1 class="display-3">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
              </div>
            
            
        </section>        
        
        <section id="home">
            
        </section>
        
        <section id="about">
            
        </section>
        
        <section id="gallery">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="..." alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            
        </section>
        
        <section id="gigs">
            
        </section>
        
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    

            <!--Input Form - with Bootstrap-->
            
           <?php include 'formValidation.php' ?>
            


            <h5>Contact Us</h5>
            <p><span class="error">* required field.</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
              Name: <br><input type="text" name="name" value="<?php echo $name;?>">
              <span class="error">* <?php echo $nameErr;?></span>
              <br><br>
              E-mail: <br><input type="text" name="email" value="<?php echo $email;?>">
              <span class="error">* <?php echo $emailErr;?></span>
              <br><br>
              Website: <br><input type="text" name="website" value="<?php echo $website;?>">
              <span class="error"><?php echo $websiteErr;?></span>
              <br><br>
              Comment: <br><textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
              <br><br>
              Gender:<br>
              <input type="radio" name="gender"
              <?php if(isset($gender) && $gender == "female") echo "checked";?>
              value="female">Female
              <input type="radio" name="gender"
              <?php if(isset($gender) && $gender == "male") echo "checked";?>
              value="male">Male
              <span class="error">* <?php echo $genderErr;?></span>
              <br><br>
              <input type="submit" name="submit" value="Submit">  
            </form>

            <!--Output from form entry values -->

            <?php include 'formOutput.php' ?>
            </div>
           </div>  
        </section>
     
        <?php
        // put your code here
 
        ?>
    </body>
</html>
