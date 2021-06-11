<?php
    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        $GameID      =$_POST['GameID'];
        $Nickname    =$_POST['Nickname'];
        $Ranks      =$_POST['Ranks'];
        $Regions    =$_POST['Regions'];
        
        $input      =mysqli_query($koneksi, "insert into mahasiswa values ('$GameID','$Nickname','$Ranks','$Regions')");
        
        
        if($input)
        {
            echo"<h3>Data Berhasil Ditambahkan</h3>";
            echo "<script>window.location = 'index.php' </script>";
        }
        else
        {
            echo "<h2> Gagal menambahkan data</h2>";
            echo "<a href ='tambah.php ?GameID = ".$GameID."'>kembali</a>";
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }

?>