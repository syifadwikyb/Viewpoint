<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="site.css">
</head>
<body>
<header>
        <div class="container">
            <div class="header-ha">
                    <!-- GAMBAR BOSS -->
                <img class="logo" src="asset/logo.png"><br>
                <a href="index.php">Home</a>
                <a href="https://docs.google.com/spreadsheets/d/1PvY6n1fWafl9EdBBIp-7GF9_U6_EqnCWi9kFzZCFkxQ/edit#gid=0">Pricelist</a>
            </div>
        </div>
</header>
        <div class="input">
            <div class="gambar">
                <img src="asset/canon 700D.png" alt="">
            </div>
            <div class="data">
                
                
                <?php 
            error_reporting(E_ERROR | E_PARSE);
            $nama=$_GET['name'];
            $alamat=$_GET['alamat'];
            $hari=$_GET['hari'];
            $harga= 130;
            
            $camera= "CANON EOS 700D";
            $via = $_GET['payment'];

            ?>




            <center>
            <p> Kamera yang anda pilih adalah CANON EOS 700D</p>
            <p> Biaya sewa per hari : 130 K</p>
            <p>Silahkan isi formulir pemesanan dibawah ini</p>
            </center>
            <br>
            <form action="go_canon700d.php" method="get"> 
                <div class="nama">
                    <p>Nama <input type="text" name="name" required placeholder="masukkan nama"></p>
                </div>
                <br>
                <div class="alamat">
                    <p>Alamat  <input type="text" name="alamat" required placeholder="masukkan alamat"></p>
                </div>
                <br>
                <div class="lama">
                    <p>Lama Sewa (Hari)  <input type="number" min="0" max="10" name="hari" value="jhs" required ></p>
                </div>
                <br>
                <div class="metode">
                    <p>Metode
                        <select name="mertode" method= "post">
                            <option value="1"  >Ambil di Kios</option>
                            <option value="2"  >Antar ke alamat (+20k)</option>
                        </select>
                    </p> 
                </div>
                <br>
                <div class="pembayaran">
                    <p>Pembayaran 
                        <select name="payment">
                            <option value="bca" >BCA</option>
                            <option value="cod" >COD</option>
                            <option value="dana" >DANA</option>
                        </select>
                    </p>
                </div>
                <br>
                <div class="submit">
                    <a href="go_canon700d.php">
                        <input type="submit" name="submit" value="Konfirmasi Pesanan">
                    </a>
                </div>
            </form>
            <br>

        </div>
    </div>
    
</body>
</html>