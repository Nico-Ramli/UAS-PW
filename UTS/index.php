<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @font-face{
            font-family:Valorant;
            src:url('Valorant.ttf');}
        }
    </style>
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
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: gray; " >
  <div class="container-fluid">
    <a class="navbar-brand" href="#" tabindex="-1" aria-disabled="true">Main Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown and see
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php">Home</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="About_me.php">About me</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aksi_logout.php" >Logout</a>
        </li>
      </ul>
    </div>
  </div>   
    </nav>
<main>
      <div class="container shadow-lg ">
        <h1>Win Counter</h1>
        <span id="value">0</span>
        <div class="button-container">
          <button class="btn decrease">Lose</button>
          <button class="btn reset">Reset</button>
          <button class="btn increase">Win</button>
        </div>
      </div>
    
<table class="styled-table table-bordered caption-top ">
    <caption>Accounts</caption>
    <caption><a href="tambah.php"><h4>Add Accounts</h4></a></caption>
    <thead>
        <tr >
            <th>Riot ID</th>
            <th>Nickname</th>
            <th>Rank</th>
            <th>Region</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include_once 'koneksi.php';
        $no=1;
        $data=mysqli_query($koneksi,"Select * from mahasiswa");
        while($d=mysqli_fetch_array($data)){
        ?>
        <tr style="background-color:grey">>
            <td><?php echo $d['GameID'];?></td>
            <td><?php echo $d['Nickname'];?></td>
            <td><?php echo $d['Ranks'];?></td>
            <td><?php echo $d['Regions'];?></td>
            <td>
                <a href="Edit.php ?GameID=<?php echo $d['GameID'];?>">edit</a>
                <a href="Hapus.php ?GameID=<?php echo $d['GameID'];?>">hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
    </main>
    <script src="app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>         
</html>