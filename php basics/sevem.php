<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seven Document</title>

    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <?php
        $name = $email = "";
        $nameError = $emailError = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            if (empty($_POST["name"])) {
                $nameError = "Name is required";
            } else {
                $name = test_value($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                  $nameError = "Only letters and white space allowed";
                }
            }
    
            if (empty($_POST["email"])) {
                $emailError = "Email is required";
            } else {
                $email = test_value($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailError = "Oinvalid Email Format";
                }
            }
    
        }

        function test_value($value){
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
            return $value; 
        }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameError; ?></span><br>

        <label for="email">Email : </label>
        <input type="text" id="email" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailError;?></span><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    echo "<h2>Output is : </h2>";
    echo "Your name is : ";
    echo $name;
    echo "<br>";
    echo "Your email is : ";
    echo $email;
    echo "<br>";
    ?>
</body>

</html>