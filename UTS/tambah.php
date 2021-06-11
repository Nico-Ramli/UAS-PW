<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name ="viewport" content="width=device width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="Tambah.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
    <script src="jqruery.js"></script>
</head>
    
    <body class="bground">
        <div class="box">
        <h3>
        <a href="index.php">kembali</a><br>
            <p>Tambah data Gamer</p>
        </h3>
        <form action="Tambah_proses.php" method="post" class="formbox">
            <table >
                <tr>
                    <td class="userpass">GameID</td>
                    <td class="petik">:</td>
                    <td><input type="number" name ="GameID" required class="userpass"> </td>
                </tr>
                <tr>
                    <td class="userpass">Nickname</td>
                    <td class="petik">:</td>
                    <td><input type="text" name ="Nickname" required class="userpass"> </td>
                </tr>
                <tr>
                    <select name="Ranks" required class="userpass">    
                    <option value="Iron">Iron</option>    
                    <option value="Bronze">Bronze</option>    
                    <option value="Silver">Silver</option>    
                    <option value="Gold">Gold</option>    
                    <option value="Platinum">Platinum</option>    
                    <option value="Diamond">Diamond</option>    
                    <option value="Immortal">Immortal</option>    
                    <option value="Radiant">Radiant</option>
                        </select>
                </tr>
                <tr>
                    <td class="userpass">Region</td>
                    <td class="petik">:</td>
                    <td><input type="text" name ="Regions" required class="userpass"> </td >
                </tr>
                <tr>
                    <td> &nbsp; </td>
                    <td></td>
                    <td><input type ="submit" name="tambah" value="tambah" class="btnlog"> </td>
                </tr>
            
            
            
            
            </table>
        
        
        
        
        
        </form>
    
    
    
    
    
        </div>
    </body>