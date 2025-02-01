<?php 
//jika yang dipost adalah token, maka jalankan blok kode if berikut ini.
if(isset($_POST['token'])){
    include 'connection.php';
    //buat variabel $key untuk menampung token
    $key=$_POST['token'];

    //koneksi ke database dan mencocokkan dengan token yang ada di tb_kontrol
    $sql = mysqli_query($dbconnect, "SELECT * FROM tb_kontrol_ledbuzzer WHERE token='$key'");
    //hitung berapa data yang ada tokennya sama dengan $key
    $cekdata = mysqli_num_rows($sql);

    //jiak ditemukan row dimana tokennya = $key
    if($cekdata > 0){
        //buat variabel $data untuk ambil array di tb_kontrol
        $data = mysqli_fetch_assoc($sql);
}else{
    //untuk merespon, $data kita kasih keterangan "token tidak valid"
    $data=[
        "token"=>"Tidak Valid"
    ];
    }
    $respon= json_encode($data);
    echo $respon;
}
?>