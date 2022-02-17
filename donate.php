<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fname = $lname = $contact = $email = $add_1 = $add_2 = $city = $district = $state = $pincode = $book_type ="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        $contact = test_input($_POST["contact"]);
        $email = test_input($_POST["email"]);
        $add_1 = test_input($_POST["add_1"]);
        $add_2 = test_input($_POST["add_2"]);
        $city  = test_input($_POST["city"]);
        $district = test_input($_POST["district"]);
        $state = test_input($_POST["state"]);
        $pincode = test_input($_POST["pincode"]);
        $book_type = test_input($_POST["book_type"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>
    <form style="text-align: center;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="fname">First name</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="contact">Contact number</label><br>
        <input type="number" id="contact" name="contact"><br>
        <label for="email">E-mail</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="add_1">Address line 1:</label><br>
        <input type="text" id="add_1" name="add_1"><br>
        <label for="add_2">Address line 2:</label><br>
        <input type="text" id="add_2" name="add_2"><br>
        <label for="city">City</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="district">District</label><br>
        <input type="text" id="district" name="district"><br>
        <label for="state">State</label><br>
        <input type="text" id="state" name="state"><br>
        <label for="pincode">Pin code</label><br>
        <input type="number" id="pincode" name="pincode"><br>
        <label for="book_type">Domain of the books</label><br>
        <input type="checkbox" name="book_type" value="jee">JEE <br>
        <input type="checkbox" name="book_type" value="neet">NEET <br>
        <input type="checkbox" name="book_type" value="Other">Other <br>
        <input type="submit">
    </form>
    <?php
    echo "<h2>Your Input</h2>";
    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $contact;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $add_1;
    echo "<br>";
    echo $add_2;
    echo "<br>";
    echo $city;
    echo "<br>";
    echo $district;
    echo "<br>";
    echo $state;
    echo "<br>";
    echo $pincode;
    echo "<br>";
    echo $book_type;
    ?>
</body>
</html>
