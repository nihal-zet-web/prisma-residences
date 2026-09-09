<?php
require "config.php";
$name = htmlspecialchars($_POST['name']);
$lastname = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);
$phoneNumber = htmlspecialchars($_POST['phone-number']);
$message = htmlspecialchars($_POST['message']);
$isSeller = htmlspecialchars($_POST['is-seller']);
if ($isSeller === "yes") {
    $isSeller = 1; 
} else {
    $isSeller = 0; 
}
var_dump($_POST);
var_dump($name);
var_dump($lastname);
var_dump($email);
var_dump($phoneNumber);
var_dump($message);

if ($name && $email) {
    $insertContactQuery = "INSERT INTO contacts (contact_name, contact_lastname, contact_email, contact_phone_num, contact_message, is_seller) VALUES (:name, :lastname, :email, :phoneNumber, :message, :isSeller)";
    $insertContactStmt = $pdo->prepare($insertContactQuery);
    $insertContactStmt->execute([":name" => $name, ":lastname" => $lastname, ":email" => $email, ":phoneNumber" => $phoneNumber, ":message" => $message, ":isSeller" => $isSeller]);
    echo "USER ADDED SUCCESSFULLY TO CONTACTS TABLE!";  
}

