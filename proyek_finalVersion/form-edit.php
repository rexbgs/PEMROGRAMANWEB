<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calonsiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$member = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style_data.css">
    <title> Form Tambah Data Siswa </title>

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
	    	<h1> TAMBAH DATA SISWA </h1>
	  	</div>

        <div id="menu">
            
            <form action="proses-edit.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $member['id'] ?>" />
                <table align="center" cellspacing="0" cellpadding="0" width="100%" border="1">
                    <tr>
                        
                        <td><label for="nama">Nama</label></td>
                        <td><input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $member['nama'] ?>" /></td>
                        
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td><textarea name="alamat"><?php echo $member['alamat'] ?></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                        <td>
                            <?php $jk = $member['jenis_kelamin']; ?>
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="agama">Agama: </label></td>
                        <td>
                        <?php $agama = $member['agama']; ?>
                        <select name="agama">
                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                        </select>
                        </td>
                    </tr>
                </table>
                <table border="0" align="center">
                <tr>    
                    <input type="submit" value="Simpan" name="simpan" />
                </tr>
                    
                
            </table>
            </form>  
        </div>

       

        <!-- Footer -->
		<div id="bottom">
	    	<p>Copyright © 2019 Dinas Pendidikan, Pemuda, dan Olahraga Gunungkidul</p>
	  	</div>


    </div>
    
</body>
</html>