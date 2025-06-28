<!DOCTYPE html>
<html>
<head>
    <title>Penemu Terkenal di Dunia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Penemu-Penemu Terkenal di Dunia</h2>

<?php
$penemu = array(
    array(
        "nama" => "Thomas Alva Edison",
        "asal" => "Amerika Serikat",
        "penemuan" => "Lampu pijar",
        "tahun" => 1879,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9d/Thomas_Edison2.jpg/200px-Thomas_Edison2.jpg"
    ),
    array(
        "nama" => "Alexander Graham Bell",
        "asal" => "Skotlandia",
        "penemuan" => "Telepon",
        "tahun" => 1876,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Alexander_Graham_Bell.jpg/375px-Alexander_Graham_Bell.jpg"
    ),
    array(
        "nama" => "Nikola Tesla",
        "asal" => "Kroasia",
        "penemuan" => "Arus listrik AC",
        "tahun" => 1888,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d4/N.Tesla.JPG/200px-N.Tesla.JPG"
    ),
    array(
        "nama" => "Isaac Newton",
        "asal" => "Inggris",
        "penemuan" => "Hukum Gravitasi",
        "tahun" => 1687,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Portrait_of_Sir_Isaac_Newton%2C_1689_%28brightened%29.jpg/500px-Portrait_of_Sir_Isaac_Newton%2C_1689_%28brightened%29.jpg"
    ),
    array(
        "nama" => "Albert Einstein",
        "asal" => "Jerman",
        "penemuan" => "Teori Relativitas",
        "tahun" => 1905,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Albert_Einstein_Head.jpg/200px-Albert_Einstein_Head.jpg"
    ),
    array(
        "nama" => "Wright Bersaudara",
        "asal" => "Amerika Serikat",
        "penemuan" => "Pesawat terbang",
        "tahun" => 1903,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Orville_Wright_1905-crop.jpg/330px-Orville_Wright_1905-crop.jpg"
    ),
    array(
        "nama" => "Galileo Galilei",
        "asal" => "Italia",
        "penemuan" => "Teleskop astronomi",
        "tahun" => 1609,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Galileo.arp.300pix.jpg/500px-Galileo.arp.300pix.jpg"
    ),
    array(
        "nama" => "Tim Berners-Lee",
        "asal" => "Inggris",
        "penemuan" => "World Wide Web (WWW)",
        "tahun" => 1989,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Tim_Berners-Lee_closeup.jpg/500px-Tim_Berners-Lee_closeup.jpg"
    ),
    array(
        "nama" => "Marie Curie",
        "asal" => "Polandia",
        "penemuan" => "Radioaktivitas",
        "tahun" => 1898,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Marie_Curie_c._1920s.jpg/500px-Marie_Curie_c._1920s.jpg"
    ),
    array(
        "nama" => "James Watt",
        "asal" => "Skotlandia",
        "penemuan" => "Mesin uap modern",
        "tahun" => 1765,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/James_Watt_by_Henry_Howard.jpg/200px-James_Watt_by_Henry_Howard.jpg"
    )
);

echo "<table>";
echo "<tr><th>Nama</th><th>Asal</th><th>Penemuan</th><th>Tahun</th><th>Gambar</th></tr>";

foreach ($penemu as $data) {
    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['asal']}</td>";
    echo "<td>{$data['penemuan']}</td>";
    echo "<td>{$data['tahun']}</td>";
    echo "<td><img src='{$data['gambar']}' alt='{$data['nama']}'></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
