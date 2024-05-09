<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styles.css">
    <title>Register</title>
</head>

<body>

    <div class="container">
        <div class="box form-box">

            <?php

            include ('php/config.php');
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];

                $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

                if(mysqli_num_rows($verify_query) !=0 ){
                   echo "<div class='message'>
                             <p>This email is used, Try another One Please!</p>
                         </div> <br>";
                   echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                }
                else{
       
                   mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Erroe Occured");
       
                   echo "<div class='message'>
                             <p>Registration successfully!</p>
                         </div> <br>";
                   echo "<a href='index.php'><button class='btn'>Login Now</button>";
                
       
                }
       
                }else{
                
               ?>

            <header> Register </header>
            <form action="#" method="POST">
                <div class="field input">
                    <label for="username"></label>
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age"></label>
                    <input type="text" name="age" id="age" placeholder="Age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"
                        required>
                </div>

                <div class="field button">
                    <input type="submit" class="btn" value="Register" required>
                </div>
            </form>
            <div class="links">Already signed up? <a href="index.html">Login now</a></div>
        <?php } ?>
        </div>
</body>

</html>