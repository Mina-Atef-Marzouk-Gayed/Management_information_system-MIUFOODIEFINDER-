
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="forgetpassword.css">
    <title>Create New Password</title>
</head>
<?php include('./includes/header.php'); ?>

<body>
    <form method="POST" action="">
        <h2>Create New Password</h2>
        <p>Enter the verification code sent to your email:</p>
        <input type="text" name="code" placeholder="CODE OTP"required>
        <input type="password" name="password" placeholder="New Password" required>
        <input type="password" name="Cpassword" placeholder="Confirm Password" required>
        <button type="submit">Submit</button>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <?php if (isset($success)) echo "<p style='color:green;'>$success</p>"; ?>
    </form>
</body>
</html>
