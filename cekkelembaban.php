<?php  
	//buat koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "dbmonitoring");

	//baca data dari tabel tb_sensor
	$sql = mysqli_query($koneksi, "select * from tb_sensor order by id desc"); //data terakhir akan  berada diatas

	//baca data paling atas
	$data = mysqli_fetch_array($sql);
	$kelembaban = $data['kelembaban'];

	//uji, apabila nilai kelembaban belum ada, maka anggap kelembaban = 0
	if($kelembaban == "") $kelembaban = 0;

	//cetak nilai kelembaban
	echo $kelembaban ;

?> 