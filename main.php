<?php
$host = 'localhost';
$user = 'root';
$password = 'root';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}
session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "root", "accounts");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['password'] == $_POST['confirmpassword']) {

        //define other variables with submitted values from $_POST
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);

        //md5 hash password for security
        $password = $mysqli->real_escape_string($_POST['password']);
       
    }
}
    //create SQL query string for inserting data into the database
    $sql = "INSERT INTO users (username, email, password) " . "VALUES ('$username', '$email', '$password')";

     echo "Registration Success Added $username";
if ($mysqli->query($sql) === true)
{
    $_SESSION[ 'message' ] = "Registration succesful! Added $username to the database!";
}

?>



