<?php
    $connection=mysqli_connect('localhost','root');

    if($connection){
        echo("database connected");
    }
    else{
        echo("database not connected");
    }
    mysqli_select_db($connection,'asian_order');
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $business=$_POST['current'];
    $product=$_POST['product'];
    $quantity=$_POST['quantity'];
    $address=$_POST['address'];

    $to = "darshanam275@gmail.com";
    $subject = "My subject";
    $headers = "From:  $name " ;
    
    mail($to,$subject,$name, $address,$headers);



    if (empty($name) || empty($email) || empty($phone) ||  empty($business) || empty($product) || empty($quantity) || empty($address)) {
        header('location:error.html');
    }
    
    else{
        $data = "INSERT INTO product_order(name,email,phone,current,product,quantity,address) VALUES ('$name','$email','$phone','$business','$product','$quantity','$address')";
        mysqli_query($connection,$data);
        header('location:successful.html');
    }
    
?>

