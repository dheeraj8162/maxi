<?php
$r_button = $_POST['r_button'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$origin = $_POST['origin'];
$checkin_time = $_POST['checkin-time'];
$checkout_date = $_POST['checkout_date'];
$adult = $_POST['adult'];
$Flight = $_POST['Flight'];
$Booking_Type = $_POST['Booking_Type'];
$Vehicle_Class = $_POST['Vehicle_Class'];
$Seat_Class = $_POST['Seat_Class'];
$content="From: $name \n email: $email \n phone: $phone \n origin: $origin \n checkin_time: $checkin_time \n checkout_date: $checkout_date \n adult: $adult \n Flight: $Flight \ Booking_Type: $Booking_Type \ Vehicle_Class: $Vehicle_Class \ Seat_Class: $Seat_Class \n ";
$recipient = "alok.mani.99@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
header("location:index.html?success");
?>
