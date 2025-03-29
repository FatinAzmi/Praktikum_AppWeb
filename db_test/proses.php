<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPM = $_POST['NPM'];
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];

    $sql = "INSERT INTO mahasiswa (NPM, Nama, Email, Gender) VALUES
('$NPM','$Nama', '$Email', '$Gender')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
 $conn->close();
}
?>