<?php
// tangkap data input
$nama = $_POST["nama"];
$matkul = $_POST["matkul"];
$tugas = $_POST["tugas"];
$uts = $_POST["uts"];
$uas = $_POST["uas"];

//tampilin hasil data
echo "Nama Lengkap : " . $nama;
echo "<br>";
echo "Mata Kuliah : " . $matkul;
echo "<br>";
echo "Tugas : " . $tugas;
echo "<br>";
echo "Nilai UTS : " . $uts;
echo "<br>";
echo "Nilai UAS : " . $uas;
echo "<br>";

?>