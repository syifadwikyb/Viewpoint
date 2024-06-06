<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>

            <?php 
            error_reporting(E_ERROR | E_PARSE);
            $n=$_GET['name'];
            $a=$_GET['alamat'];
            $d=$_GET['hari'];
            $x= 100;
            $y=$_GET['mertode'];
            $c= "CANON EOS 700D";
            $m = $_GET['ajil'];
            
            
            

            ?>
            
            Kamera yang anda pilih adalah CANON EOS 700D
            <br>
            Biaya sewa per hari : 100 K
            <br>
            Silahkan isi formulir pemesanan dibawah ini
            <form action="go.php" method="get"> 
            Nama: <input type="text" name="name" required>
            <br>
            Alamat : <input type="text" name="alamat" required>
                <br>
                Lama Sewa (Hari) : <input type="number" min="0" max="10" name="hari" value="jhs" required >
                <br>
                Metode 
                <select name="mertode"  >
                <option value="ambil" name="ambil" id="ambil">Ambil di Kios</option>
                            <option value="antar" name="antar" id="antar">Antar ke alamat (+20k)</option>

            </select>
            <br>
                pembayaran <select name="ajil">
                <option value="BCA" >BCA</option>
                <option value="cod" >cod</option>
        </select>
                <br>
            <a href="go.php">
            <input type="submit" name="submit" value="Konfirmasi Pesanan">
        </a>
            <br>

</body>
</html>