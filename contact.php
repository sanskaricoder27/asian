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
    $feedback=$_POST['feedback'];
    
    // echo("$name ,$email ,$mobile,$hometown");
    if (empty($name) || empty($email) || empty($phone) ||  empty($feedback)) {
        // echo "You did not fill out the required fields.";
        header('location:error.html');
    }
    else{
        $data = "INSERT INTO asian_contact(name,phone,email,feedback) VALUES ('$name','$phone','$email','$feedback')";
        mysqli_query($connection,$data);
        header('location:successful.html');
    }
    

?>