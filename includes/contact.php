<?php
// Cek apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pesan = htmlspecialchars(trim($_POST["pesan"]));

    // Validasi sederhana
    if (empty($nama) || empty($email) || empty($pesan)) {
        $error = "Semua bidang wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Alamat email tidak valid.";
    } else {
        // Set email tujuan
        $to = "your-email@example.com";
        $subject = "Pesan dari Kontak";

        // Isi pesan email
        $message = "Nama: $nama\n";
        $message .= "Email: $email\n";
        $message .= "Pesan:\n$pesan\n";

        // Header email
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        // Kirim email
        if (mail($to, $subject, $message, $headers)) {
            $success = "Pesan berhasil dikirim!";
        } else {
            $error = "Terjadi kesalahan saat mengirim pesan. Coba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
</head>
<body>
    <h2>Hubungi Kami</h2>

    <?php if (!empty($success)) : ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <?php if (!empty($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form action="kontak.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea name="pesan" id="pesan" rows="4" cols="23" required></textarea><br><br>

        <button type="submit" class="btn btn-info">Kirim</button>
    </form>
</body>
</html>
