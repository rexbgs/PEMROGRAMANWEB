<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style_data.css">
    <title> Tampil Data Siswa </title>

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
	    	<h1> TAMPIL DATA SISWA </h1>
	  	</div>

        <div id="menu">
            <table border="1" align="center" width="100%" >
                <tr>
                    <th> &nbsp; NIS &nbsp;</th>
                    <th>&nbsp; Nama &nbsp;</th>
                    <th> &nbsp; Alamat &nbsp;</th>
                    <th> &nbsp; Jenis Kelamin &nbsp;</th>
                    <th>&nbsp; Agama &nbsp;</th>
                    <th>&nbsp;Tindakan&nbsp;</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM calonsiswa";
                    $query = mysqli_query($db, $sql);

                    while($member = mysqli_fetch_array($query)){
                        echo "<tr align=center>";

                        echo "<td> &nbsp".$member['id']."&nbsp</td>";
                        echo "<td> &nbsp".$member['nama']."&nbsp</td>";
                        echo "<td> &nbsp".$member['alamat']."&nbsp</td>";
                        echo "<td> &nbsp".$member['jenis_kelamin']."&nbsp </td>";
                        echo "<td> &nbsp".$member['agama']." &nbsp</td>";

                        echo "<td>";
                        echo "<a href='form-edit.php?id=".$member['id']."'>&nbsp Edit &nbsp </a> | ";
                        echo "<a href='hapus.php?id=".$member['id']."'>&nbsp Hapus &nbsp</a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                ?>
                <tr>
                    <th>
                        Total: <?php echo mysqli_num_rows($query) ?>
                    </th>
                </tr>

            </table>
            <br><br>
            <table border="0" align="center">
                <tr>
                    <td id="ubah"> <a href="data.php"> <h2> &nbsp; BACK &nbsp; </h2> </a></td>
                    <td id="ubah"> <a href="form-tambah.php"> <h2> &nbsp; TAMBAH DATA [+] &nbsp; </h2></a></td>
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