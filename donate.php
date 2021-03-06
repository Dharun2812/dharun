<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReBook/Donate</title>
</head>
<body>
    <?php
        $fnamefor = $lnamefor = $contactfor = $emailfor = $cityfor = $districtfor = $statefor = $pincodefor = "";
        $fname = $lname = $contact = $email = $add_1 = $add_2 = $city = $district = $state = $pincode = $book_type ="";
        $fnameErr = $emailErr = $contactErr = $add_1Err = $districtErr = $stateErr = $pincodeErr = $book_typeErr = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["fname"])){
                $fnameErr = "First name is required";
            }else{
                $fname = test_input($_POST["fname"]);
            }
            $name = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $fnamefor = "Only letters and white space allowed";
            }
            $lname = test_input($_POST["lname"]);
            if(empty($_POST["contact"])){
                $contactErr = "contact number is required";
            }else{
            $contact = test_input($_POST["contact"]);
            }
            if(empty($_POST["email"])){
                $emailErr = "email-id is required";
            }else{
            $email = test_input($_POST["email"]);
            }
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
            if(empty($_POST["add_1"])){
                $add_1Err = "required";
            }else{
            $add_1 = test_input($_POST["add_1"]);
            }
            $add_2 = test_input($_POST["add_2"]);
            $city  = test_input($_POST["city"]);
            if (!preg_match("/^[a-zA-Z]*$/",$city)) {
                $cityfor = "Only letters allowed";
            }
            if(empty($_POST["district"])){
                $districtErr ="required";
            }else{
            $district = test_input($_POST["district"]);
            }
            $district = test_input($_POST["district"]);
            if (!preg_match("/^[a-zA-Z]*$/",$name)) {
                $districtfor = "Only letters allowed";
            }
            if(empty($_POST["state"])){
                $stateErr = "required";
            }else{
            $state = test_input($_POST["state"]);
            }
            $state = test_input($_POST["state"]);
            if (!preg_match("/^[a-zA-Z]*$/",$name)) {
                $statefor = "Only letters allowed";
            }
            if(empty($_POST["pincode"])){
                $pincodeErr = "required";
            }else{
            $pincode = test_input($_POST["pincode"]);
            }
            if(empty($_POST["book_type"])){
                $book_typeErr = "required";
            }else{
            $book_type = test_input($_POST["book_type"]);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
    ?>
    <form style="text-align: center;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label for="fname">First name</label>
        <span class="error">* <?php echo $fnameErr; echo $fnamefor?></span><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Last name</label><br>
        <input type="text" id="lname" name="lname"><br>
        <label for="contact">Contact number</label>
        <span class="error">* <?php echo $contactErr;?></span><br>
        <input type="number" id="contact" name="contact"><br>
        <label for="email">E-mail</label>
        <span class="error">* <?php echo $emailErr;?></span>
        <br>
        <input type="email" id="email" name="email"><br>
        <label for="add_1">Address line 1</label>
        <span class="error">*: <?php echo $add_1Err;?></span>
        <br>
        <input type="text" id="add_1" name="add_1"><br>
        <label for="add_2">Address line 2:</label><br>
        <input type="text" id="add_2" name="add_2"><br>
        <label for="city">City</label><br>
        <input type="text" id="city" name="city"><br>
        <label for="district">District</label>
        <span class="error">* <?php echo $districtErr;?></span>
        <br>
        <input type="text" id="district" name="district"><br>
        <label for="state">State</label>
        <span class="error">* <?php echo $stateErr;?></span>
        <br>
        <input type="text" id="state" name="state"><br>
        <label for="pincode">Pin code</label>
        <span class="error">* <?php echo $pincodeErr;?></span>
        <br>
        <input type="number" id="pincode" name="pincode"><br>
        <label for="book_type">Domain of the books</label>
        <span class="error">* <?php echo $book_typeErr;?></span>
        <br>
        <input type="checkbox" name="book_type" value="jee">JEE <br>
        <input type="checkbox" name="book_type" value="neet">NEET <br>
        <input type="checkbox" name="book_type" value="Other">Other <br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
