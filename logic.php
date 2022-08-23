<?php
$fullName = $_POST['fullName'];
$gender = $_POST['gender'];
$Country = $_POST['Country'];
$path = $_POST['path'];
$comment = $_POST['comment'];
$car = $_POST['car'];
$sportCar = $_POST['sportCar'];
$motorbike = $_POST['motorbike'];

if (empty($_POST['fullName'])) echo "<p>Full name = Not entered</p>"; else echo "<p>Full name = $fullName</p>";
if (empty($_POST['gender'])) echo "<p>Sex = Not entered</p>"; else echo "<p>Sex = $gender</p>";
if (empty($_POST['Country'])) echo "<p>Country = Not entered</p>"; else echo "<p>Country = $Country</p>";
if (empty($_POST['path'])) echo "<p>Path = Not entered</p>"; else echo "<p>Path = $path</p>";
if (empty($_POST['comment'])) echo "<p>Comment = Not entered</p>"; else echo "<p>Comment = $comment</p>";
if (empty($_POST['car'])) echo "<p>Chapter 1 = Not entered</p>"; else echo "<p>Chapter 1 = $car</p>";
if (empty($_POST['sportCar'])) echo "<p>Chapter 2 = Not entered</p>"; else echo "<p>Chapter 2 = $sportCar</p>";
if (empty($_POST['motorbike'])) echo "<p>Chapter 3 = Not entered</p>"; else echo "<p>Chapter 3 = $motorbike</p>";

?>
