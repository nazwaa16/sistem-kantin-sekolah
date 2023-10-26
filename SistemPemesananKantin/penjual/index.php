<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_penjual DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="../index.php">kembali ke halaman utama</a><br/>
    <a href="add.php">tambah penjual</a><br/><br/>
 
    <table width='80%' border=1>
    <tr>
        <th>id_penjual</th>
         <th>nama</th> 
         <th>no_hp</th>
          <th>alamat</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_penjual']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";    
        echo "<td>".$user_data['alamat']."</td>";    
        echo "<td><a href='edit.php?id_penjual=$user_data[id_penjual]'>Edit</a> | <a href='delete.php?id_penjual=$user_data[id_penjual]'>Delete</a></td></tr>";        
    }
    ?>
   
    </table>
</body>
</html>