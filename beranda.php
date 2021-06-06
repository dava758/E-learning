<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMBELAJARAN KARAKTER </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    body{
            background-image: url('images/gradient-geometric-shape-background_78532-374.jpg');
    }
    </style>
    
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:beranda.php?pesan=gagal");
	}
 
	?>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>PEMBELAJARAN KARAKTER</a></div>
            <div class="menu">
                <ul>
                    <li><a href="beranda.php">Beranda</a></li>
                    <li><a href="materi.php">Materi</a></li>
                    <li><a href="diskusi.php">Diskusi</a></li>
                    <li><a href="login.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk beranda -->
        <section id="beranda">
            <img src="images/pngegg.png"/>
            <div class="kolom">
                <p class="deskripsi">#Pembelajaran Karakter Untuk Masa Depan Bangsa</p>
                <h2>"Mendidik Pikiran Tanpa Mendidik Hati Bukanlah Pendiidikan Sama Sekali."</h2>
                <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>
        
        >
        </div>
    </div>
            </div>
        </div>
    </div>
</body>
</html>