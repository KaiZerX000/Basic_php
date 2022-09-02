<?php


$txt_name_prefix = $_POST["txt_name_prefix"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$sex = $_POST["sex"];
$birthdate = $_POST["birthdate"];
$address = $_POST["address"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];


echo "Username : ", $txt_name_prefix;
echo "<br/>";
echo "Firstname : ", $firstname;
echo "&nbsp;&nbsp;";
echo "Lastname : ", $lastname;
echo "<br/>";
echo "Sex : ", $sex;
echo "<br/>";
echo "Date of birth : ", $birthdate;
echo "<br/>";
echo "Address : ", $address;
echo "<br/>";
echo "Email : ", $email;
echo "<br/>";
echo "Tell : ", $phonenumber;


?>


