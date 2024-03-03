<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>User registration form</title>
</head>
<body>
    <div>
        <h2 class="title">Form</h2>
        <!-- <form action="form.php" method="get"> Get method-->
        <form action="form.php" method="post"> <!-- Post method -->
            <p>Username: </p>
            <input type="text" name="username">
            <br>
            <br>
            <p>Password: </p>
            <input type="password" name="password">
            <br>
            <br>
            <br>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>