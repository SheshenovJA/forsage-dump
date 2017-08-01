<?php
error_reporting(E_ALL);
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG .= "Обов'язкове поле ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Обов'язкове поле ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Обов'язкове поле ";
} else {
    $message = $_POST["message"];
}
// PHONE
if (empty($_POST["phone"])) {
  $errorMSG .= "Обов'язкове поле ";
} else {
  $phone = $_POST["phone"];
}
// VIN
if (empty($_POST["vin"])) {
  $errorMSG .= "Обов'язкове поле ";
} else {
  $vin = $_POST["vin"];
}

$EmailTo = "forsage.store@gmail.com";
$Subject = "Отримано нове замовлення!";

// prepare email body text
$Body = "";
$Body .= "Ім'я: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Телефон: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "VIN: ";
$Body .= $vin;
$Body .= "\n";
$Body .= "Деталь: ";
$Body .= $message;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
