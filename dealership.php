<?php
$connection = mysqli_connect('localhost', 'root');

// if ($connection) {
//     echo ("database connected");
// } else {
//     echo ("database not connected");
// }
mysqli_select_db($connection, 'asian_order');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$business = $_POST['current'];
$address = $_POST['address'];

if (empty($name) || empty($email) || empty($phone) || empty($business) || empty($address)) {
    // echo "You did not fill out the required fields.";
    header('location:error.html');
}
else{
    $data = "INSERT INTO asian_dealership(name,phone,email,current_business,address) VALUES ('$name','$phone','$email','$business','$address')";
    mysqli_query($connection, $data);
    header('location:successful.html');
}

?>
