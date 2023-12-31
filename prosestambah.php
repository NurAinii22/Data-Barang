<!DOCTYPE html>
<html>
    <head>
        <title>Upload File </title>
    </head>
    <body>
        <h1>Upload File </h1>
        
        <?php
        include 'koneksi.php';
        if(isset($_POST['simpan'])){
            
            // menangkap data yang di kirim dari form
            $kode_barang = $_POST['kode_barang'];
            $nama_barang = $_POST['nama_barang'];
            $kategori = $_POST['kategori'];
            $satuan = $_POST['satuan'];
            $harga_modal = $_POST['harga_modal'];
            $harga_jual = $_POST['harga_jual'];
            $ekstensi_diperbolehkan = array('png','jpg','jpeg');
            $photo = $_FILES['file']['name'];
            $x = explode('.', $photo);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $namafile = 'img_'.$kode_barang.'.jpg'; 
            if(!in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){ 
                    move_uploaded_file($file_tmp, 'file/'.$namafile);
                    $query = mysqli_query($koneksi,"insert into tbbarang(kode_barang,nama_barang,katagori,satuan,harga_modal,harga_jual,photo) values('$kode_barang','$nama_barang','$katagori','$satuan','$harga_modal','$harga_jual','$namafile')");
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