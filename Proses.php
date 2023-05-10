<?php
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST['submit'])) {
  
  // baca data yang dikirimkan dari form
  $nama_lengkap = $_POST['nama_lengkap'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal = $_POST['tanggal'];
  $bulan = $_POST['bulan'];
  $tahun = $_POST['tahun'];
  $tanggal_lahir = "$tahun-$bulan-$tanggal";
  $alamat_rumah = $_POST['alamat_rumah'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $asal_sekolah = $_POST['asal_sekolah'];
  $nilai_uan = $_POST['nilai_uan'];
  
  // tampilkan hasil dari data yang telah diisi pada form
  echo "Terima kasih $nama_lengkap sudah mengisi form pendaftaran.<br>";
  echo "Nama Lengkap : $nama_lengkap<br>";
  echo "Tempat Lahir : $tempat_lahir<br>";
  echo "Tanggal Lahir : $tanggal_lahir<br>";
  echo "Alamat Rumah : $alamat_rumah<br>";
  echo "Jenis Kelamin : $jenis_kelamin<br>";
  echo "Asal Sekolah : $asal_sekolah<br>";
  echo "Nilai UAN : $nilai_uan<br>";

} 

?>
