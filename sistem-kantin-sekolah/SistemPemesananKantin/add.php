<html>
<head>
    <title>penjual</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_penjual"></td>
            </tr>
            <tr> 
                <td>id_penjual</td>
                <td><input type="text" name="id_penjual"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>no_hp</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_penjual = $_POST['nama_penjual'];
        $id_penjual = $_POST['id_penjual'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO penjual(nama_penjual,id_penjual,alamat,no_hp) VALUES('$nama_penjual','$id_penjual','$alamat','$no_hp')");
        
        // Show message when user added
        echo "Users added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>