<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "universitas_siber_asia";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jenis Kelamin</th><th>Kelas</th><th>Program Studi</th><th>Angkatan</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["nim"] . "</td><td>" . $row["jenis_kelamin"] . "</td><td>" . $row["kelas"] . "</td><td>" . $row["program_studi"] . "</td><td>" . $row["angkatan"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa";
}

$conn->close();
?>