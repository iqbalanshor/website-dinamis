<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Display the submitted data
    echo "<h2>Your Submitted Data:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
} else {
    // Display the form if not submitted
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Contact Form</title>
    </head>
    <body>
        <h1>Silahkan Isi Form Kami</h1>
        <form action="form.php" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" id="nama" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br><br>

            <label for="pesan">Pesan:</label><br>
            <textarea name="pesan" id="pesan" rows="4" cols="23" required></textarea><br><br>

            <input type="submit" class="btn btn-info" value="Submit">
        </form>
    </body>
    </html>
    <?php
}
?>