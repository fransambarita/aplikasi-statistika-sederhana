<h3>Menghitung Nilai Max-Min</h3>
<form method="POST">
	
	<input type="text" placeholder="JumlahData" name="jumlahdata"><br><br>


	<input type="submit" name="submit" value="Proses">
	
</form>
<?php
if(isset($_POST['submit'])){ 
	echo"SILAHKAN ISI DATA ANDA";
	echo"<form action='' method='post'>";
	$jumlahdata=$_POST['jumlahdata'];
	for($i=0; $i<$jumlahdata; $i++){
		echo"DATA KE".($i+1)." = <input type='text' name='data_ke".$i."' />";
		echo"<br />";
	}
	echo"<input type='hidden' value='".$jumlahdata."' name='jumlahdata'/>";

	echo"<input type='submit' value='Hitung' name='hitung'/>";
}
//Max-Min
    if(isset($_POST['hitung'])){
	echo"<h3>Kumpulan Data</h3>";
	$jumlahdata=$_POST['jumlahdata'];
	$nilai=array();
    ?>
	 <table>
            
            <tr>
                <td>Data</td>
                <?php
                for($i=1; $i<=$jumlahdata; $i++){
                ?>
                <td>
                <?php echo "$i"; ?>
                </td>
                <?php
                }
                ?>
            </tr>
            
            <tr>
                <td>Nilai</td>
                <?php
            for($i=0; $i<$jumlahdata; $i++){
            ?>
                <td>
                <?php
                $nilai[$i] = $_POST["data_ke$i"];
		              echo $nilai[$i];
                ?>
                </td>
                    <?php
            }
            ?>
            </tr>
        </table>
    <?php
	echo"<h3>HASIL MAX & MIN </h3>"; ?>
        <table>
            <tr>
                <td>NILAI MAX</td>
                <td><?php 
                    echo"".max($nilai)."";
                ?></td>
            </tr>
            <tr>
                    <td>NILAI MIN</td>
                  <td><?php
                        echo"".min($nilai)."";
                    ?></td></tr>
                    
             
        </table>
       <?php
}