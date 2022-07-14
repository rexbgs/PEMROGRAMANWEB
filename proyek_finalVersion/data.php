<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style_data.css">
    <title> Data Siswa </title>

</head>

<body>
    <div class="bungkusan khusus">
        
        <!-- Header -->
		<div id="header">
			<img src="logo-dikpora.png">
			
			<p> Pemerintah Kabupaten Gunungkidul </p>
			<p> Dinas Pendidikan Kabupaten Gunungkidul </p>
			<p> SMP NEGERI 1 PONJONG </p>	
		</div>
        
        <!-- ISI -->
        <div id="menuawal">
	    	<h1> DATA SISWA </h1>
	  	</div>

        <nav>
            <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'success'){
                    echo "TAMBAH berhasil!";
                } else {
                    echo "TAMBAH gagal!";
                }
            ?>
        </p>
            <?php endif; ?>
        </nav>    

        <div id="menu">
            <table border="0" align="center">
                <tr>
                    <td id="ubah"> <a href="list-siswa.php" target="_blank"> <h1> &nbsp; LIHAT DATA SISWA &nbsp; </h1> </a></td>
                    <td id="ubah"> <a href="form-tambah.php" target="_blank"> <h1> &nbsp; TAMBAH DATA SISWA &nbsp; </h1></a></td>
                </tr>
                <tr>
                  <a href="index.html"> <h1> &nbsp; BACK &nbsp; </h1> </a>  
                </tr>
            </table>
	  	</div>

        <!-- Footer -->
		<div id="bottom">
	    	<p>Copyright © 2019 Dinas Pendidikan, Pemuda, dan Olahraga Gunungkidul</p>
	  	</div>


    </div>
    
</body>
</html>