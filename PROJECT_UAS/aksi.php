<?php 
if(isset($_GET['channel'])&&isset($_GET['state'])){
    //panggil connection.php untuk koneksi ke db
    include 'connection.php';
    //buat variabel $channel dan $state untuk menampung request GET
    $channel = $_GET['channel'];
    $state = $_GET['state'];

    if($channel=='1'){
        //jika channelnya 1, maka blok ini dijalankan
        //koneksi ke tabel, ke field led1
        mysqli_query($dbconnect,"UPDATE tb_kontrol_ledbuzzer SET led='$state'");
    } else if($channel=='2'){
        mysqli_query($dbconnect,"UPDATE tb_kontrol_ledbuzzer SET buzzer='$state'");
    }
    header('location:index.php');
    exit;


}
?>