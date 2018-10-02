<?php 

$username = "root";
$pass = "";
$server = "localhost";
$db = "ocr";
$db2 = "gowalib";

$con = new PDO("mysql:host=$server;dbname=$db", $username, $pass);
$con2 = new PDO("mysql:host=$server;dbname=$db2", $username, $pass);

 $response = array();

	$Judul = $_POST['judul'];
	$Nama = $_POST['penulis'];
	$Nim = $_POST['nim1'];
	$Jurusan = $_POST['klasifikasi'];
	$Prodi = $_POST['prodi'];
	$Tahun = $_POST['tahun'];
	$Abstrak = $_POST['deskripsi'];


	try{
            if(isset($Judul) && isset($Nama) && isset($Nim) && isset($Jurusan) && isset($Prodi) && isset($Tahun) && isset($Abstrak)){
                $query = "INSERT INTO skripsi (judul,nama,nim,jurusan,prodi,tahun,abstrak) VALUES ('$Judul','$Nama','$Nim','$Jurusan','$Prodi','$Tahun','$Abstrak')";
                $con->exec($query);
            }
        }catch (PDOException $e){
            echo "Error while inserting ".$e->getMessage();
        }

        //cek is the row was inserted or not
        if($query){
            //success inserted
            $response["success"] = 1;
            $response["message"] = "successful inserted!";

            echo json_encode($response);

        }else{
            //failed inserted
            $response["success"] = 0;
            $response["message"] = "Failed while insert data";

            echo json_encode($response);
        }

$response2 = array();

	$Judul2 = $_POST['judul'];
	$Nama2 = $_POST['penulis'];
	$Nim2 = $_POST['nim1'];
	$Jurusan2 = $_POST['klasifikasi'];
	$Prodi2 = $_POST['prodi'];
	$Tahun2 = $_POST['tahun'];
	$Abstrak2 = $_POST['deskripsi'];


	try{
            if(isset($Judul2) && isset($Nama2) && isset($Nim2) && isset($Jurusan2) && isset($Prodi2) && isset($Tahun2) && isset($Abstrak2)){
                $query2 = "INSERT INTO bacaan (judul,penulis,nim1,klasifikasi,prodi,tahun,deskripsi) VALUES ('$Judul2','$Nama2','$Nim2','$Jurusan2','$Prodi2','$Tahun2','$Abstrak2')";
                $con2->exec($query2);
            }
        }catch (PDOException $e2){
            echo "Error while inserting ".$e2->getMessage();
        }

        //cek is the row was inserted or not
        if($query2){
            //success inserted
            $response2["success"] = 1;
            $response2["message"] = "successful inserted!";

            echo json_encode($response2);

        }else{
            //failed inserted
            $response2["success"] = 0;
            $response2["message"] = "Failed while insert data";

            echo json_encode($response2);
        }

 ?>