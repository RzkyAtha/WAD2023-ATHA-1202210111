<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM showroom_mobil WHERE id = '$id'");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    if (isset($_POST['update'])) {
        $nama = $_POST['nama_mobil'];
        $brand = $_POST['brand_mobil'];
        $warna = $_POST['warna_mobil'];
        $tipe = $_POST['tipe_mobil'];
        $harga = $_POST['harga_mobil'];

        // Insert Data
        $sqlUpdate = "UPDATE showroom_mobil SET nama_mobil='$nama', brand_mobil='$brand', warna_mobil=$warna, tipe_mobil=$tipe , harga_mobil=$harga WHERE id=$id";

        if ($connect->query($sqlUpdate) === TRUE) {
            $notifikasi = "Data komik berhasil diupdate.";
        } else {
            $notifikasi = "Error: " . $sqlUpdate . "<br>" . $koneksi->error;
        }
    }
    
    
    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

        // Eksekusi perintah SQL

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database


?>