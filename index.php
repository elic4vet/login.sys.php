<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styles.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header> Login </header>
            <form action="#" method="POST">
                <div class="field input">
                    <label for="username"></label>
                    <input type="text" name="username" id="username" placeholder="Username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password"></label>
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off"
                        required>
                </div>

                <div class="field button">
                    <input type="submit" class="btn" value="Login" required>
                </div>
            </form>
            <div class="links">Not yet signed up? <a href="register.html">Register now</a></div>
        </div>
</body>

</html>