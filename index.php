<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form action="register.php" method="post">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <textarea name="address" placeholder="Address" required></textarea><br>
            <input type="tel" name="phone" placeholder="Phone" required><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
