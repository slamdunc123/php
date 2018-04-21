<?php
/*
echo $_POST['name']."<br>";
echo $_POST['email']."<br>";
echo $_POST['address']."<br>";
echo $_POST['password']."<br>";
echo $_POST['confirmpassword']."<br>";
*/
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $city = $_POST['city'];
    $county = $_POST['county'];
    $postcode = $_POST['postcode'];
    $telephone = $_POST['telephone'];

}

if($_POST['firstname']){
    if($_POST['lastname']){
        if($_POST['username']){
            if($_POST['password']){
                if($_POST['confirmpassword']){
                    if($_POST['password']==$_POST['confirmpassword']){
                        echo "Your form has been sent successfully!";
                    }else{
                        echo "Your password doesn't match";
                    }
                }else{
                    echo "You have to confirm your password";
                }
            }else{
                echo "You have to type a password";
            }
        }else{
            echo "You have to type an address";
        }
    }else{
        echo "You have to type an email";
    }
}else{
    echo "You have to type a name";
}
?>