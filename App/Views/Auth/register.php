<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h2>Sign Up</h2>

    <?php if (isset($_SESSION['register_error'])) : ?>
        <p style="color: red;"><?= $_SESSION['register_error']; ?></p>
        <?php unset($_SESSION['register_error']); ?>
    <?php endif; ?>

    <form action="/handleRegister" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <button type="submit">Register</button>
    </form>
</body>

</html>