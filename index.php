<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <?php
        $phone = isset($_GET['phone']) ? htmlspecialchars($_GET['phone']) : '';
        $error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';
        ?>
        <form action="process.php" method="post">
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
            <br><br>
            <?php if ($error): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif; ?>
            <input type="submit" value="Submit">
            <input type="button" value="Reset" class="reset-button" onclick="window.location.href='index.php'">
        </form>
    </div>
</body>
</html>