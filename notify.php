<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $choice = $_POST["choice"];
    $subject = "Makan Besok";
    $message = "Your girlfriend's choice: " . $choice;
    $to = "afadhlanm16@gmail.com";
    
    mail($to, $subject, $message);
}
?>