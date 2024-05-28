
<?php

require('user_validator.php');

if (isset($_POST['submit'])) {
    # code...
    $validation = new UserValidator($_POST);
    $errors = $validation->validateForm();
}
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATE</title>
</head>
<body>
    <div class="new-user">
        <h2>Create new User</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>username:</label>
            <input type="text" name="username">
            <div class="errors">
                <?php echo $errors['username'] ?? '' ?>
            </div>
            <label>email:</label>
            <input type="text" name="email">
             <div class="errors">
                <?php echo $errors['email'] ?? '' ?>
            </div>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>