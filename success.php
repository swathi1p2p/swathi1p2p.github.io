<?php
// submit_appointment.php

// Simulate form processing, e.g., saving data to a database
$patientName = $_POST['patient_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$appointmentDate = $_POST['appointment_date'];
$appointmentTime = $_POST['appointment_time'];
$message = $_POST['message'];

// Normally, you would save the form data to a database here

// After processing, redirect to the success page
header("Location: appointment_success.html");
exit();
?>
