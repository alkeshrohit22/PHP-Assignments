<?php $testing = 'value123'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>
        PHP Form
    </title>
</head>

<body>
    <div>
        <h1>
            Sigma Employee Form <?php echo $testing ?>
        </h1>
    </div>
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
    <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="employeeForm">

        <div class="form-control">
            <label for="name" id="label-name">
                Name
                <span class="error" style="color: red;">* <?php echo $nameError; ?></span>
            </label>

            <input type="text" id="name" name="name" placeholder="Enter your name" value="<?php
                                                                                            echo $name ?>" />

        </div>

        <div class="form-control">
            <label for="email" id="label-email">
                Email
                <span class="error" style="color: red;">* <?php echo $emailError; ?></span>
            </label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php
                                                                                                echo $email ?>" />
        </div>

        <div class="form-control">
            <label for="age" id="label-age">
                Age
                <span class="error" style="color: red;">* <?php echo $ageError; ?></span>
            </label>
            <input type="text" id="age" name="age" placeholder="Enter your age" value="<?php
                                                                                        echo $age ?>" />
        </div>

        <div class="form-control">
            <label for="gender">
                Sex
                <span class="error" style="color: red;">* <?php echo $genderError; ?></span>
            </label>

            <label for="male">
                <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender == "male") {
                                                                echo "checked";
                                                            }
                                                            ?> value="male">Male</input>
            </label>
            <label for="female">
                <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender == "female") {
                                                                    echo "checked";
                                                                }
                                                                ?> value="female">Female</input>
            </label>
            <label for="other">
                <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender == "other") {
                                                                    echo "checked";
                                                                }
                                                                ?> value="other">Other</input>
            </label>

        </div>

        <div class="form-control">
            <label for="role" id="label-role">
                What is your role in Sigma infosolution ?
                <span class="error" style="color: red;">* <?php echo $roleError; ?></span>
            </label>

            <select name="role" id="role">
                <option value="other">Other</option>
                <option value="intern">Intern</option>
                <option value="intern trainee">Intern Trainee</option>
                <option value="PHP Developer">PHP Developer</option>
                <option value="Fronted Developer">Fronted Developer</option>
                <option value="database administrator">database administrator</option>
                <option value="project manager">Project Manager</option>
                <option value="IT service">IT Service Area</option>
            </select>
        </div>

        <div class="form-control">
            <label>
                What is your favourite technology ?
                <span class="error" style="color: red;">* <?php echo $techError; ?></span>
            </label>

            <label for="php">
                <input type="radio" id="php" name="technology" <?php if (isset($technology) && $technology == "php and laravel") {
                                                                    echo "checked";
                                                                }
                                                                ?> value="php and laravel">PHP And Lavavel</input>
            </label>
            <label for="react-node">
                <input type="radio" id="react-node" name="technology" <?php if (isset($technology) && $technology == "React and node") {
                                                                            echo "checked";
                                                                        }
                                                                        ?> value="React and node">React and Node</input>
            </label>
            <label for="react">
                <input type="radio" id="react" name="technology" <?php if (isset($technology) && $technology == "react") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> value="react">Only React</input>
            </label>
            <label for="node">
                <input type="radio" id="node" name="technology" <?php if (isset($technology) && $technology == "node") {
                                                                    echo "checked";
                                                                }
                                                                ?> value="node">Only Node</input>
            </label>
            <label for="magento">
                <input type="radio" id="magento" name="technology" <?php if (isset($technology) && $technology == "magento") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> value="magento">Magento</input>
            </label>
        </div>

        <div class="form-control">
            <label for="comment">
                Any comments or suggestions
                <span class="optional" style="color:green">(optional)</span>
            </label>
            <textarea name="comment" id="comment" placeholder="Enter your comment here">
			</textarea>
        </div>
        <button type="submit" id="submitbutton" value="submit">
            Submit
        </button>
    </form>
    <script src="form.js"></script>

</body>
<?php
echo "<h1>Output : </h1>";
echo "Name is : " . $name;
?>

</html>