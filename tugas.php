  <?php
require 'koneksi.php';
$mahasiswa = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mvc</title>
    <style>
        body {
            background: pink;
        }
        table {
            color: yellow;
            background: orange;
        }
        h3 {
        color: green;
        font-family:  sans-serif;
    
}
        
    
    </style>
</head>
<body>
    <h1 align= "center">MVC</h1>
    <h3>Pengertian MVC
Model View Controller atau yang dapat disingkat MVC adalah sebuah 
pola arsitektur dalam membuat sebuah aplikasi dengan cara memisahkan
 kode menjadi tiga bagian yang terdiri dari:

Model
Bagian yang bertugas untuk menyiapkan, mengatur, memanipulasi, 
dan mengorganisasikan data yang ada di database.

View
Bagian yang bertugas untuk menampilkan informasi dalam bentuk
 Graphical User Interface (GUI).

Controller
Bagian yang bertugas untuk menghubungkan serta mengatur 
model dan view agar dapat saling terhubung.

Alur Model View Controller
Setelah kamu mengetahui penjelasan dan komponen dari MVC,
sekarang kita akan membahas alur proses dari MVC.
Berikut ini adalah alur prosesnya.

Proses pertama adalah view akan meminta data untuk ditampilkan
 dalam bentuk grafis kepada pengguna.
Permintaan tersebut diterima oleh controller dan diteruskan ke model untuk diproses.
Model akan mencari dan mengolah data yang diminta di dalam database
Setelah data ditemukan dan diolah, model akan mengirimkan data
 tersebut kepada controller untuk ditampilkan di view.
Controller akan mengambil data hasil pengolahan model dan mengaturnya di
 bagian view untuk ditampilkan kepada pengguna.</h3>
 <hr>
 <h1 align= "center">Data Produk</h1>




    <table border="4" cellpadding="20" cellspacing="2" align= "center"  >
       

   
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Opsi</th>
    
           

           
        </tr>
        <?php $i =1; ?>
        <?php foreach($mahasiswa as $mhs): ?>
     <tr>
        <td><?=$i;?></td>
        <td><?= $mhs["nama barang"];?></td>
        <td><?= $mhs["kode barang"];?></td>
        <td><?= $mhs["harga barang"];?></td>
        <td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
        

       
       
     </tr>
    
     <?php $i++; ?>
            <?php endforeach; ?>
        
    </table>
</body>
</html> 