<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Number Validation Result</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $phone = $_POST['phone'];
            $pattern = "/^\(\d{3}\)\d{3}-\d{4}$/";

            if (preg_match($pattern, $phone)) {
                echo "<p>Thank you! The phone number $phone is valid.</p>";
            } else {
                $error = "Invalid phone number format. Please use (xxx)xxx-xxxx.";
                header("Location: index.php?error=" . urlencode($error) . "&phone=" . urlencode($phone));
                exit();
            }
        }
        ?>
        <input type="button" value="Reset" class="reset-button" onclick="window.location.href='index.php'">
    </div>
</body>
</html>
