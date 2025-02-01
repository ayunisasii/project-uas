<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$password = '';
$dbname = 'iot_kontrol_ledbuzzer';

//melakukan koneksi ke databases
$dbconnect = new mysqli($dbhost, $dbuser, $password, $dbname);
//jika tidak berhasil koneksi ke databases
if($dbconnect->connect_error){
    die('server bermasalah');
}
?>
