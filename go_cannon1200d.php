<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="site.css">
    <link rel="stylesheet" href="go.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">">

</head>

<body>
    <header>
            <div class="container">
                <div class="header-ha">
                    <!-- GAMBAR BOSS -->
                <img class="logo" src="asset/logo.png"><br>
                </div>
            </div>
        </header>
    <?php 
    error_reporting(E_ERROR | E_PARSE);         
       $nama=$_GET['name'];
            $alamat=$_GET['alamat'];
            $hari=$_GET['hari'];
            $harga= 80;
           
            $camera= "CANON EOS 1200D";
            $via = $_GET['payment'];
            $total = $hari*$harga;
            $final = $total+20;
    
    
    
    
    


    ?>
    <div class="semuanya">
            <span class="tambahan"></span>
            <div class="title">
                    <p>Berikut Ringkasan Pesanan Anda</p>
            </div>
                <br> 
            <div class="pesan">
                <div class="nama-pesan">
                    <p>Nama Pemesan : <?php echo $nama?></p>
                </div>
                <br>
                <div class="alamat">
                    <p>Alamat : <?php echo $alamat?></p>
                </div>
                <br>
                <div class="camera">
                    <p>Camera yang dipesan: <?php echo $camera?></p>
                </div>
                <br>
                <div class="lama">
                    <p>Lama Sewa: <?php echo $hari?> Hari</p>
                </div>
                <br>

                <div class="mertode">
                    <?php
                    if($_REQUEST['mertode']=="2"){
                        echo "Total Bayar : Rp. $final.000 ";
                    }else {
                        echo "Total Bayar : Rp. $total.000 ";
                    }
                    ?>
                </div>
                <br>
                <div class="bayar">
                    <p>Pembayaran : <?php if($_REQUEST['payment']=="bca"){
                            echo "Silahkan Transfer Ke Rekening BCA 09871234 a.n ViewPointBCA";
                        }else if ($_REQUEST['payment']=="cod") {
                            echo "Silahkan bayar dengan uang pas, ada saat kamera diserahkan";}
                            else { echo nl2br ("Silahkan kirim saldo sesuai nominal yang tertera ke \n akun DANA 082135567899 a.n ViewPoint");} ?>
                        }  ?>
                    </p>
                </div>
            </div>
            <div class="tombol">
                <a href="selesai.php" class="btn done"><span class="fa fa-solid fa-check"></span>Selesai</a>
                <a href="#" class="btn whatsapp"><span class="fa fa-brands fa-whatsapp"></span>Hubungi</a>
            </div>
        </div>

    
</body>
</html>