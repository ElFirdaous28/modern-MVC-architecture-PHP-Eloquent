<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>Sign Up</h2>

    <!-- Show global errors (if any) -->
    <?php if (isset($_SESSION['register_error'])): ?>
        <div class="error"><?= $_SESSION['register_error']; ?></div>
        <?php unset($_SESSION['register_error']); ?>
    <?php endif; ?>

    <form action="/handleRegister" method="POST">
        <!-- CSRF Token -->
         @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <!-- Show error for name field -->
        <?php if (isset($_SESSION['errors']['name'])): ?>
            <div class="error"><?= $_SESSION['errors']['name']; ?></div>
        <?php endif; ?>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>

        <!-- Show error for email field -->
        <?php if (isset($_SESSION['errors']['email'])): ?>
            <div class="error"><?= $_SESSION['errors']['email']; ?></div>
        <?php endif; ?>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>

        <!-- Show error for password field -->
        <?php if (isset($_SESSION['errors']['password'])): ?>
            <div class="error"><?= $_SESSION['errors']['password']; ?></div>
        <?php endif; ?>

        <button type="submit">Register</button>
    </form>

    <?php
     unset($_SESSION['errors']); 
     ?>
</body>

</html>