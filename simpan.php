<!DOCTYPE html>
<html>
    <head>
        <title>Upload File </title>
    </head>
    <body>
        <h1>Upload File </h1><?php 
$koneksi = mysqli_connect("localhost","root","","tbbarang");   
if (mysqli_connect_errno()){
echo " koneksi Gagal : " . mysqli_connect_error();
}

else{
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $satuan = $_POST['satuan']; 
        $katagori  = $_POST['katagori'];
        $harga_modal = $_POST['harga_modal'];
        $harga_jual = $_POST['harga_jual'];
        $ekstensi_diperbolehkan = array ('png','jpg');

        $photo = $_FILES['file']['name'];
         $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $namafile = 'img_'.$kode_barang.'.jpg'; 
            if(!in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){ 
                    move_uploaded_file($file_tmp, 'file/'.$namafile);
        $query = mysqli_query($koneksi, "INSERT INTO tbbarang (kode_barang,nama_barang,satuan,katagori,harga_modal,harga_jual,photo)

      values('$kode_barang','$nama_barang','$satuan','$katagori','$harga_modal','$harga_jual','$photo')");
if($query){
                        
                        //echo 'FILE BERHASIL DI UPLOAD';
                        echo "<script>alert('DATA BERHASIL DI SIMPAN');window.location='index.php';</script>";
                    }else{
                        echo "<script>alert('DATA GAGAL DI SIMPAN');window.location='index.php';</script>";
                    }
                }else{
                    echo "<script>alert('UKURAN FILE TERLALU BESAR');window.location='tambahdata.php';</script>";
                }
            }else{
                echo "<script>alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');window.location='tambahdata.php';</script>";
            }
        }
        ?>
        </body>
        </html>       	
