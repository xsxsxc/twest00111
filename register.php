<?php
// Retrieve values from the registration form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$conn = new mysqli('localhost', 'root','', 'easybtc');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(username,email,password)
         values(?, ?, ?)");
         $stmt->bind_param("sss", $username, $email, $password);
         $stmt->execute();
         echo "registration successfull";
         $stmt->close();
         $conn->close();

}
$conn->close();
?>