<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pesanan</title>
</head>

<body>

    <h2>Daftar Pesanan</h2>

    <?php
    // Path ke file txt (sesuaikan dengan kebutuhan Anda)
    $filePath = "orders.txt";

    // Membaca isi file orders.txt
    $orders = file_get_contents($filePath);

    // Menampilkan isi file
    echo "<pre>$orders</pre>";
    ?>

</body>

</html>