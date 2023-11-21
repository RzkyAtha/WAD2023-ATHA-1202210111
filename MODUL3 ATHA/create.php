<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST['create'])) {
    $nama = $_POST['nama_mobil'];
    $brand = $_POST['brand_mobil'];
    $warna = $_POST['warna_mobil'];
    $tipe = $_POST['tipe_mobil'];
    $harga = $_POST['harga_mobil'];

    // Insert Data
    $sqlInsert = "INSERT INTO showroom_mobil (nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) 
                    VALUES ('$nama', '$brand', '$warna', '$tipe','$harga' )";
    if ($connect->query($sqlInsert) === TRUE) {
        $notifikasi = "Data mobil berhasil ditambahkan.";
    } else {
        $notifikasi = "Error: " . $sqlInsert . "<br>" .$connect->connect_error;
    }
}
// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil

    // b. Ambil data brand mobil

    // c. Ambil data warna mobil

    // d. Ambil data tipe mobil

    // e. Ambil data harga mobil

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)


    // (5) Buatkan kondisi jika eksekusi query berhasil

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

// (7) Tutup koneksi ke database setelah selesai menggunakan database
?>