<?php
// koneksi database
include 'koneksi.php';
//Memproses data saat form di submit
if(isset($_POST["kode_barang"]) && !empty($_POST["kode_barang"])){
// menangkap data yang di kirim dari form
	$kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $satuan = $_POST['satuan']; 
        $katagori = $_POST['katagori'];
        $harga_modal = $_POST['harga_modal'];
        $harga_jual = $_POST['harga_jual'];
        $ekstensi_diperbolehkan = array ('png','jpg');

        $photo = $_FILES['file']['name'];
        $x = explode('.', $photo);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $namafile = 'img_'.$kode.'.jpg';
if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
if($ukuran < 1044070){
move_uploaded_file($file_tmp, 'file/'.$namafile);
// mengupdate data ke database
$update=mysqli_query($koneksi,"UPDATE inputbarang SET
nama_barang='$nama_barang',satuan='$satuan',katagori='$katagori',harga_modal='$harga_modal',harga_jual='$harga_jual'photo ='$photo'
WHERE kode_barang='$kode_barang'")or die(mysqli_error());
if($update){
        //echo 'BERHASIL';
        echo "<script>alert('DATA BERHASIL DI UPDATE');window.location='index.php';</script>";
    }else{
        echo "<script>alert('UPDATE GAGAL');window.location='index.php';</script>";
    }
}else{
    if(!in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if ($ukuran < 10440700){
            if(move_uploaded_file($file_tmp, 'file/'.$namafile)){ 
                // Cek apakah gambar berhasil diupload atau tidak
                $update=mysqli_query($koneksi,"UPDATE tbbarang SET nama_barang='$nama_barang',katagori='$katagori',satuan='$satuan',harga_modal='$harga_modal',harga_jual='$harga_jual',photo='$namafile' WHERE kd_barang='$kd_barang'")or die(mysql_error());
                if($update){
                    echo "<script>alert('DATA BERHASIL DI UPDATE');window.location='index.php';</script>";
                }else{
                    echo "<script>alert('DATA GAGAL DI UPDATE');window.location='index.php';</script>";
                }
            }else{
                echo "<script>alert('GAGAL MENGUPLOAD GAMBAR');window.location='index.php';</script>";
            }
        }else{
            echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
        }
    }else{
        echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='edit_datamahasiswa.php?id=$kode_barang';</script>";
    }
}
}
?>