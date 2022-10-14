<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date= $_POST['date_of_birth'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$handle = fopen("userdata.csv",'a');
fwrite($handle , $name );
fwrite($handle , $email);
fwrite($handle , $date);
fwrite($handle , $country);
fwrite($handle , $gender);

fclose($handle);
print_r($_POST);
?>