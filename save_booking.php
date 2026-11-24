<?php

// Database Connection

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "alkana_hotel"
);

// Collect Form Data

$fullname  = $_POST['fullname'];
$email     = $_POST['email'];
$phone     = $_POST['phone'];
$idnumber  = $_POST['idnumber'];
$checkin   = $_POST['checkin'];
$checkout  = $_POST['checkout'];
$roomtype  = $_POST['roomtype'];
$guests    = $_POST['guests'];
$comments  = $_POST['comments'];


// Insert Query

$sql = "INSERT INTO bookings
(
fullname,
email,
phone,
idnumber,
checkin,
checkout,
roomtype,
guests,
comments
)

VALUES

(
'$fullname',
'$email',
'$phone',
'$idnumber',
'$checkin',
'$checkout',
'$roomtype',
'$guests',
'$comments'
)";


// Execute Query

if(mysqli_query($conn,$sql))
{
?>

<!DOCTYPE html>
<html>

<head>

<title>Booking Successful</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card shadow text-center p-5">

<h1 class="text-success">

✅ Booking Successful

</h1>

<hr>

<h4>

Thank You <?php echo $fullname; ?>

</h4>

<p>

Your reservation has been received.

</p>

<a href="index.html"
class="btn btn-primary">

Return Home

</a>

<a href="booking.html"
class="btn btn-success">

Make Another Booking

</a>

</div>

</div>

</body>

</html>

<?php

}
else
{

echo "Error Saving Booking";

}

?>