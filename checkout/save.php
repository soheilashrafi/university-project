<?php
$servername = "localhost";
$username = "avajoyir_s12";
$password = "solel2002";
$dbname = "avajoyir_s12";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("اتصال به دیتابیس ناموفق بود: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

$therapist = $_POST['therapist'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$appointmentDate = $_POST['appointmentDate'];
$appointmentTime = $_POST['appointmentTime'];
$description = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];

$sql = "INSERT INTO appointments (therapist, name, phone, email, appointment_date, appointment_time, description, price, status) 
        VALUES ('$therapist', '$name', '$phone', '$email', '$appointmentDate', '$appointmentTime', '$description', '$price', '$status')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;

    header("Location: ./confirmation/?status=success&id=$last_id");
    exit();
} else {
    $error = $conn->error;
    header("Location: ./confirmation/?status=error&message=" . urlencode($error));
    exit();
}

$conn->close();

?>