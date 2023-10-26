<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM menu ORDER BY id_menu DESC");

?>
 
<html>
<head>    
    <title>menu</title>
</head>
 
<body>
<a href="../index.php">kembali kehalaman utama</a><br/><br/>
<a href="add.php">tambah menu</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>id_menu</th> <th>jenis</th> <th>harga</th> <th>nama_menu</th> <th>stok_menu</th> <th>id_penjual</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_menu']."</td>";
        echo "<td>".$user_data['jenis']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td>".$user_data['nama_menu']."</td>";
        echo "<td>".$user_data['stok_menu']."</td>";  
        echo "<td>".$user_data['id_penjual']."</td>";  
        echo "<td><a href='edit.php?id_menu=$user_data[id_menu]'>Edit</a> | <a href='delete.php?id_menu=$user_data[id_menu]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>