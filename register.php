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
        </div>
</body>

</html>