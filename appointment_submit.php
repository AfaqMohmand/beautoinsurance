<?php 
session_start();
include "db.php";
if (isset($_POST['submit'])){
    // $zipcode = $_POST['zipcode'];
    // $full_name = $_POST['full_name'];
    // $phone_number = $_POST['phone_number'];
    // $email_address = $_POST['email_address'];
    // $age = $_POST['age'];
    // $gender = $_POST['gender'];
    // $comments = $_POST['comments'];
    $zipcode = $_POST['zip_code'];
    $vehicle_make = $_POST['vehicle_make'];
    $vehicle_year = $_POST['vehicle_year'];
    $vehicle_model = $_POST['vehicle_model'];

    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email_address = $_POST['email_address'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $comments = $_POST['comments'];
    $leadId = $_POST['universal_leadid'];

    if ($conn) {
        $sql = "INSERT INTO appointments (zip_code, full_name, gender, age, email_address, phone_number, comments, leadiD, vehicle_make, vehicle_year, vehicle_model) VALUES ('$zipcode', '$full_name', '$gender', '$age', '$email_address', '$phone_number', '$comments', '$leadId', '$vehicle_make', '$vehicle_year', '$vehicle_model')";
        if (mysqli_query($conn, $sql)){
            header("location:thank-you.php");
        }
        else {
            "Error in Booking your Appointment";
        }
    }
    else {
        echo "error connecting db";
    }
}
?>