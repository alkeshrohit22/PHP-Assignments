<?php
$name = $email = $gender = $technology = $role = $age = '';
$nameError = $emailError = $genderError = $techError = $roleError = $ageError = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //for name
    if (empty($_POST["name"])) {
        $nameError = "please enter name!!!";
    } else {
        $name = test_all($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameError = "invalid name given";
        }
    }

    //for email
    if (empty($_POST['email'])) {
        $emailError = "please enter email!!!";
    } else {
        $email = test_all($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "invalid email given!!!";
        }
    }

    //for age
    if (empty($_POST['age'])) {
        $ageError = 'please enter age first!!!';
    } else {
        $age = test_all($_POST['age']);
        if (!preg_match('/^[0-9]+$/', $age)) {
            $ageError = 'please enter age only';
        }
    }

    //for gender
    if (empty($_POST["gender"])) {
        $genderError = "Gender is required";
    } else {
        $gender = test_all($_POST["gender"]);
    }

    //technology validation
    if (empty($_POST["technology"])) {
        $techError = "technology is required";
    } else {
        $technology = test_all($_POST["technology"]);
    }
}

function test_all($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

?>