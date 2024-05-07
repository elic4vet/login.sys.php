<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Profile</title>
    <link rel="stylesheet" href="/style/styles.css">
</head>

<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"> <button class="btn">Log out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">
            <header> Change Profile </header>
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

                <div class="field button">
                    <input type="submit" class="btn" value="Update" required>
                </div>
            </form>
        </div>
</body>

</html>