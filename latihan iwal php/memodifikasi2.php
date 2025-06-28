<?php
$mahasiswa = [
    [
        "nama" => "Iqwal Sumiranda",
        "email" => "iwal@uin.ac.id",
        "jurusan" => "Sistem Informasi",
        "gambar" => "kaisar.jpg"
    ],
    [
        "nama" => "Xavier",
        "email" => "xavier@uin.ac.id",
        "jurusan" => "Teknik Kimia",
        "gambar" => "321.jpg"
    ],
    [
        "nama" => "Monkey D Luffy",
        "email" => "messi@uin.ac.id",
        "jurusan" => "Tekniik Kelautan",
        "gambar" => "123.jpg"
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
        }
        .mahasiswa {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .mahasiswa img {
            width: 60px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .mahasiswa a {
            text-decoration: none;
            color:rgb(107, 250, 255);
            font-weight: bold;
        }
        .mahasiswa a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Daftar Mahasiswa</h2>

<?php foreach ($mahasiswa as $mhs): ?>
    <div class="mahasiswa">
        <img src="<?= $mhs['gambar']; ?>" alt="<?= $mhs['nama']; ?>">
        <a href="memodifikasi2.php?nama=<?= urlencode($mhs['nama']); ?>&email=<?= urlencode($mhs['email']); ?>&jurusan=<?= urlencode($mhs['jurusan']); ?>&gambar=<?= urlencode($mhs['gambar']); ?>">
            <?= $mhs['nama']; ?>
        </a>
    </div>
<?php endforeach; ?>

</body>
</html>
<?php
// Ambil data dari URL
$nama = $_GET['nama'];
$email = $_GET['email'];
$jurusan = $_GET['jurusan'];
$gambar = $_GET['gambar'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #eef1f5;
        }
        .profil {
            max-width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        h3 {
            margin-top: 0;
            color: #333;
        }
        p {
            margin: 8px 0;
            color: #555;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 8px 15px;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
                        .logout {
            padding: 10px 20px;
            background-color: #ff4d4d;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .logout:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>

<div class="profil">
    <h3>Profil Mahasiswa</h3>
    <img src="<?= $gambar; ?>" alt="<?= $nama; ?>">
    <p><strong><?= $nama; ?></strong></p>
    <p><?= $email; ?></p>
    <p><?= $jurusan; ?></p>
    <a href="memodifikasi1.php">Kembali</a>
</div>
<a href="logout.php" class="logout">Logout</a>
</body>
</html>
