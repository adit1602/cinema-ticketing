<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie = $_POST["movie"];
    $quantity = $_POST["quantity"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Data pemesanan
    $orderData = "Film: $movie\nJumlah Tiket: $quantity\nNama: $name\nEmail: $email\n\n";

    // Path ke file txt (sesuaikan dengan kebutuhan Anda)
    $filePath = "orders.txt";

    // Menyimpan data pemesanan ke dalam file txt
    file_put_contents($filePath, $orderData, FILE_APPEND | LOCK_EX);

    // Menampilkan ringkasan pemesanan
    echo "<h2>Rincian Pemesanan:</h2>";
    echo "<p>Film: $movie</p>";
    echo "<p>Jumlah Tiket: $quantity</p>";
    echo "<p>Nama: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Data telah disimpan.</p>";
}
