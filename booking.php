<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie_data = array(
        "film1" => array(
            "image" => "gambar/godfather-poster.jpg",
            "description" => "Detail film 1."
        ),
        "film2" => array(
            "image" => "gambar/ Spiderman-poster.jpg",
            "description" => "Detail film 2."
        )
        // Tambahkan data film lainnya
    );

    $movie = $_POST["movie"];
    $quantity = $_POST["quantity"];

    // Lakukan sesuatu dengan data, misalnya simpan ke database
    // Di sini Anda dapat menambahkan logika untuk menyimpan data ke database

    // Setel nilai elemen gambar dan deskripsi di halaman HTML
    echo "<script>
            document.getElementById('movie-poster').src = '{$movie_data[$movie]['image']}';
            document.getElementById('movie-description').innerText = '{$movie_data[$movie]['description']}';
          </script>";

    // Contoh sederhana: Menampilkan pesan konfirmasi
    echo "Pemesanan Tiket Sukses! Film: $movie, Jumlah Tiket: $quantity";
}
