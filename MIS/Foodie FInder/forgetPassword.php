<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgetpassword.css">
</head>
<?php include('./includes/header.php'); ?>

<body>
    <!-- Form to handle forgot password -->
    <form action="newpassword.php" method="POST">
        <h2>Forgot Password</h2>
        <p>Enter your email address:</p>
        <input type="email" name="email" required>
        <button type="submit">Continue</button>
    </form>

</body>
</html>
