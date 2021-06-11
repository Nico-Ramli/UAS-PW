<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name ="viewport" content="width=device width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Edit.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <script src="jqruery.js"></script>
</head>
    
<body class="bground">

    <?php
    
        include('koneksi.php');
        $GameID= $_GET['GameID'];
        $show = mysqli_query($koneksi, "Select * from mahasiswa where GameID = '$GameID'");
        if(mysqli_num_rows($show) == 0)
        {
            echo'<script>windows.history.back()</script>';
        }
        else
        {
            $d=mysqli_fetch_assoc($show);
        }
    ?>
    <div class="box">
    <form action="edit_proses.php" method="post" class="formbox">
        <input type="hidden" name="GameID" value="<?php echo $GameID; ?>">
        <table>
        <tr>
            <td class="userpass">Nickname</td>
            <td class="petik">:</td>
            <td>
                <input type="text" name="Nickname" size="25" value="<?php echo $d['Nickname']; ?>" required class="userpass">
            </td>
            </tr>
            <tr>
                <td class="userpass"> Rank</td>
                <td class="petik">:</td>
                <td>
                    <select name="Ranks" required class="userpass">
                        <option value="">pilih</option>
                        <option value="Iron"<?php if ($d['Ranks'] == 'Iron'){echo 'Selected';} ?>> Iron</option>
                        <option value="Bronze"<?php if ($d['Ranks'] == 'Bronze'){echo 'Selected';} ?>> Bronze</option>
                        <option value="Silver"<?php if ($d['Ranks'] == 'Silver'){echo 'Selected';} ?>> Silver</option>
                        <option value="Gold"<?php if ($d['Ranks'] == 'Gold'){echo 'Selected';} ?>> Gold</option>
                        <option value="Platinum"<?php if ($d['Ranks'] == 'Platinum'){echo 'Selected';} ?>> Platinum</option>
                        <option value="Diamond"<?php if ($d['Ranks'] == 'Diamond'){echo 'Selected';} ?>> Diamond</option>
                        <option value="Immortal"<?php if ($d['Ranks'] == 'Immortal'){echo 'Selected';} ?>> Immortal</option>
                        <option value="Radiant"<?php if ($d['Ranks'] == 'Radiant'){echo 'Selected';} ?>> Radiant</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td class="userpass">Region</td>
                <td class="petik">:</td>
                <td><input type="text" name="Regions" size="25" value="<?php echo $d['Regions']; ?>" required class="userpass"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="Submit" name= "Save" value = "Save" class="btnlog"></td>
            </tr>
        </table>
    
    
    
    
    </form>
    </div> 
    
    
    
    
    </body>
</html>