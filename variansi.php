<h3>Menghitung Variansi</h3>
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

//Variansi
    if(isset($_POST['hitung'])){
	echo"<h3>Kumpulan Data</h3><br />";
	$jumlahdata=$_POST['jumlahdata'];
	$nilai=array();
    $jum = 0;
    $jum1 = 0;
    $jum2 = 0;
    ?>
    <table>
        <tr>
            <?php
            for($i=1; $i<=$jumlahdata; $i++){
            ?>
            <td><?php echo $i; ?></td>
            <?php
            }
            ?>
        </tr>
        
        <tr>
            <?php
            for($i=0; $i<$jumlahdata; $i++){
                $nilai[$i] = $_POST["data_ke$i"];
                $jum = $jum+$nilai[$i];
                $jum1 = $jum1+$nilai[$i];
                $s = pow($nilai[$i],2);
                $jum2 = $jum2+$s;
            ?>
            <td><?php echo $nilai[$i]; ?></td>
            <?php
            }
            $z = pow($jum1,2);
            $x = $jumlahdata*($jumlahdata-1);
            $s2 = (($jumlahdata*$jum2)-$z)/$x;
            ?>
        </tr>
    </table>
    <?php
	
		
		
	

    echo"<h3>Hasil Variansi</h3>";
	
	echo"Variansi: ";
    printf("%5.2f", $s2);
     echo "<br>";

}