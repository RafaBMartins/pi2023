<?php 
function sanitizeEmail($email) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL)
    return $email
}

function sanitizeUserName($userName) {
    $userName = filter_var($userName, FILTER_SANITIZE_SPECIAL_CHARS)
    return $userName
}

function validatePassword($password) {
    return preg_match("/^(.{8,16})$/",$password)
}

function comparePassword($password1, $password2) {
    return $password1 == $password2
}

function validateUserName($userName) {
    return preg_match("/^.{1,20}$/",$userName)
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL)
}

$formType = $_POST["type"]
$usersArray = array()

if($formType == "register") {
    $userName = $_POST["userName"]
    $email = $_POST["email"]
    $password = $_POST["password"]

    $email = sanitizeEmail($email)
    $userName = sanitizeUserName($userName)

    $validationConfirmsArray = array("password" => false, "userName" => false, "email" => false)
    $validationConfirmsArray["password"] = validatePassword($password) and comparePassword($password, $_POST["passwordAgain"])
    $validationConfirmsArray["userName"] = validateUserName($userName)
    $validationConfirmsArray["email"] = validateEmail($email)

    if($validationConfirmsArray["password"] and $validationConfirmsArray["userName"] and $validationConfirmsArray["email"]) {
        $usersArray[$email] = $password
        header("location: http://localhost/pi2023/login.html")
    }
}

if($formType == "login") {
    $email = $_POST["email"]
    $password = $_POST["password"]

    $email = sanitizeEmail($email)

    if($usersArray[$email] == $password) {
        session_start()
        $_SESSION[$email]
        header("location: http://localhost/pi2023/index.php")
    }
}
?>