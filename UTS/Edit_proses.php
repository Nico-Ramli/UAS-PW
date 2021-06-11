<?php

if(isset($_POST['Save']))
{
    include('koneksi.php');
    $GameID      =$_POST['GameID'];
    $Nickname    =$_POST['Nickname'];
    $Ranks      =$_POST['Ranks'];
    $Regions    =$_POST['Regions'];
    $update     =mysqli_query($koneksi,"Update Mahasiswa set 
    
    Nickname    = '$Nickname',
    Ranks    = '$Ranks',
    Regions    = '$Regions'
    where GameID = '$GameID'")
    
    or die(mysqli_error());  
    
    if($update)
    {
        echo "<h2> data berhasil diupload</h2>";
        echo "<script>window.location = 'index.php' </script>";
    }
    else
    {
        echo "<h2> Gagal menyimpan data</h2>";
        echo "<a href ='edit.php ?GameID = ".$GameID."'>kembali</a>";
    }
}
else
{
    
    echo "<script>window.history.back()</script";
}

?>