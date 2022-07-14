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
            
            <form action="proses-tambah.php" method="POST">
                <table align="center" cellspacing="0" cellpadding="0" width="100%" border="1">
                    <tr>
                        
                        <td><label for="nama">Nama</label></td>
                        <td><input type="text" name="nama" placeholder="nama lengkap" /></td>
                        
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td><textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
                        <td>
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="agama">Agama: </label></td>
                        <td>
                        <select name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                        </td>
                    </tr>
                </table>
                <table border="0" align="center">
                <tr>    
                    <input type="submit" value="Daftar" name="daftar" />
                    <input type="reset" value="Reset" name="reset" />
                    
                </tr>
                    
                
            </table>
            </form>  
            <button>
                <a href="data.php">Back</a>
            </button> 
        </div>

       

        <!-- Footer -->
		<div id="bottom">
	    	<p>Copyright © 2019 Dinas Pendidikan, Pemuda, dan Olahraga Gunungkidul</p>
	  	</div>


    </div>
    
</body>
</html>