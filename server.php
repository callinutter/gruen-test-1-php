<?php 

//startup session
session_start();

//initializing variables

$name = "";
$email ="";
$selection = "";
$amount = "";
$errors = array();

$host = "localhost";
$user = "root";
$pwd = "";
$db = "donation";

//connect to db

$conn = mysqli_connect($host, $user, $pwd, $db) or die("could not connect to database");

//Register users
if(isset($_POST['donate'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $selection = mysqli_real_escape_string($conn, $_POST['selection']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    //form validation

    if(empty($name)) {array_push($errors, 'Name is required');}
    if(empty($email)) {array_push($errors, 'Email is required');}
    if(empty($selection)) {array_push($errors, 'A selection is required');}
    if(empty($amount)) {array_push($errors, 'You must specify an amount.');}


    //Donate if no errors

    if(count($errors) === 0 ) {
        $query = "INSERT INTO donation (name, email, selection, amount) VALUES ('$name', '$email', '$selection', '$amount')";

        mysqli_query($conn, $query); //runs query on database
        $_SESSION['name'] = $name; //close off the session
        header('location: thanks.php');
    }
}


?>