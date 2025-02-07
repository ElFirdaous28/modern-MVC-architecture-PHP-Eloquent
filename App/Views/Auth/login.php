<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form action="/handleLogin" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <?php if (isset($_SESSION['login_email_error'])) : ?>
            <p style="color: red;"><?php echo $_SESSION['login_email_error']; ?></p>
            <?php unset($_SESSION['login_email_error']); ?> <!-- Remove error after displaying -->
        <?php endif; ?>

        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <?php if (isset($_SESSION['login_password_error'])) : ?>
            <p style="color: red;"><?php echo $_SESSION['login_password_error']; ?></p>
            <?php unset($_SESSION['login_password_error']); ?> <!-- Remove error after displaying -->
        <?php endif; ?>

        <br><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>