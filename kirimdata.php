<?php 
	//buat koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "dbmonitoring");

	//baca data yang dikirim data esp8266
	$suhu = $_GET['suhu'];
	$kelembaban = $_GET['kelembaban'];
	$ldr = $_GET['ldr'];

	//simpan ke tabel tb_sensor

	//auto increment = 1 / mengembalikan ID menjadi 1 apabila dikosongkan
	mysqli_query($koneksi, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");

	//simpan data sensor ke tabel tb_sensor
	$simpan = mysqli_query($koneksi, "insert into tb_sensor(suhu, kelembaban, ldr)values('$suhu', '$kelembaban', '$ldr')");

	//uji simpan unutk memberikan respon
	if($simpan)
		echo "Berhasil dikirm";
	else
		echo "Gagal terkirim";
 
?>
