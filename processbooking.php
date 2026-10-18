<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>

<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php
if (isset($_POST["firstname"])) {
    $firstname = $_POST["firstname"];
    echo "<p>First Name: $firstname</p>";
}

if (isset($_POST["lastname"])) {
    $lastname = $_POST["lastname"];
    echo "<p>Last Name: $lastname</p>";
}

if (isset($_POST["age"])) {
    $age = $_POST["age"];
    echo "<p>Age: $age</p>";
}

if (isset($_POST["species"])) {
    $species = $_POST["species"];
    echo "<p>Species: $species</p>";
}

echo "<p>Booking:</p>";

if (isset($_POST["accom"])) {
    echo "<p>Accommodation</p>";
}

if (isset($_POST["4day"])) {
    echo "<p>4 Day Tour</p>";
}

if (isset($_POST["10day"])) {
    echo "<p>10 Day Tour</p>";
}

if (isset($_POST["food"])) {
    $food = $_POST["food"];
    echo "<p>Menu Preference: $food</p>";
}

if (isset($_POST["bookday"])) {
    $bookday = $_POST["bookday"];
    echo "<p>Date: $bookday</p>";
}

if (isset($_POST["partysize"])) {
    $partysize = $_POST["partysize"];
    echo "<p>Number of Travellers: $partysize</p>";
}
?>

</body>
</html>