<html>
<head>
    <title>menu</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>id_menu</td>
                <td><input type="text" name="id_menu"></td>
            </tr>
            <tr> 
                <td>jenis</td>
                <td><input type="text" name="jenis"></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>nama_menu</td>
                <td><input type="text" name="nama_menu"></td>
            </tr>
            <tr> 
                <td>stok_menu</td>
                <td><input type="text" name="stok_menu"></td>
            </tr>
            <tr> 
                <td>id_penjual</td>
                <td><input type="text" name="id_penjual"></td>
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
        $id_menu = $_POST['id_menu'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        $nama_menu = $_POST['nama_menu'];
        $stok_menu = $_POST['stok_menu'];
        $id_penjual = $_POST['id_penjual'];
        
        // include database connection file
        include_once("../config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO menu(id_menu,jenis,harga,nama_menu,stok_menu,id_penjual) VALUES('$id_menu','$jenis','$harga','$nama_menu','$stok_menu','$id_penjual')");
        
        // Show message when user added
        echo "Menu makanan/minuman berhasil ditambahkan. <a href='index.php'>Lihat Data Menu Makanan/Minuman</a>";
    }
    ?>
</body>
</html>