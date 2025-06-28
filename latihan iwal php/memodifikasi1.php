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
            color: #007bff;
            font-weight: bold;
        }
        .mahasiswa a:hover {
            text-decoration: underline;
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

<h2>Daftar Mahasiswa</h2>

<?php foreach ($mahasiswa as $mhs): ?>
    <div class="mahasiswa">
        <img src="<?= $mhs['gambar']; ?>" alt="<?= $mhs['nama']; ?>">
        <a href="memodifikasi2.php?nama=<?= urlencode($mhs['nama']); ?>&email=<?= urlencode($mhs['email']); ?>&jurusan=<?= urlencode($mhs['jurusan']); ?>&gambar=<?= urlencode($mhs['gambar']); ?>">
            <?= $mhs['nama']; ?>
        </a>
    </div>
<?php endforeach; ?>
<div>        <a href="logout.php" class="logout">Logout</a></div>
</body>
</html>
