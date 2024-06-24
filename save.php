<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$text_area = $_POST['text_area'];

$conn=new mysqli('localhost','root','','form');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stml=$conn->prepare("INSERT INTO form_data(first_name,last_name,email,text_area) VALUES (?,?,?,?)");
    $stml->bind_param("ssss",$first_name,$last_name,$email,$text_area);
    $stml->execute();
    echo"Contect successfully...";
    $stml->close();
    $conn->close();
}
?>

