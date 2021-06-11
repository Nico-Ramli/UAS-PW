<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name ="viewport" content="width=device width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS-MainPage.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <script src="jqruery.js"></script>
</head>

    
    <?php
        if(isset($_GET['GameID'])){
            include('koneksi.php');
            $GameID = $_GET['GameID'];
            $cek    = mysqli_query($koneksi, " select GameID from mahasiswa where GameID ='$GameID'") or die (mysqli_error());
            if(mysqli_num_rows($cek)==0)
            {
                echo"<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($koneksi,"delete from mahasiswa where GameID = '$GameID'");
                if($del)
                {
                    echo "<h3>Data Mahasiswa berhasil dihapus</h3>";
                    echo "<script>window.location = 'index.php' ; </script>";
                }
                else
                {
                    echo "<h3>Gagal menghapus data</h3>";
                    echo "<a href = 'index.php'> Kembali </a>";
                }
            }
        }
            else
            {
                echo "<script>window.history.back()</script>";
            }
        
    ?>
        <body>
    </body>