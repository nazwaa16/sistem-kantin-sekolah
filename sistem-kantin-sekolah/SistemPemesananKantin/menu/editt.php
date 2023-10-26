<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_menu'];
    
    $id_menu=$_POST['id-menu];
    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $nama_menu=$_POST['nama_menu'];
    $stok_menu=$_POST['stok_menu'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE menu SET id_menu='$id_menu',jenis='$jenis',harga='$harga',nama_menu='$nama_menu',stok_menu='$stok_menu',id_penjual='$id_penjual'WHERE id_menu=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_menu'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM menu WHERE id_menu=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $id_menu = $user_data['id_menu'];
    $jenis = $user_data['jenis'];
    $harga = $user_data['harga'];
    $nama_menu = $user_data['nama_menu'];
    $stok_menu = $user_data['stok_menu'];
    $id_penjual = $user_data['id_penjual'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>id_menu</td>
                <td><input type="int" name="id_menu" value=<?php echo $id_menu;?>></td>
            </tr>
            <tr> 
                <td>jenis</td>
                <td><input type="varchar" name="jenis" value=<?php echo $jenis;?>></td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="varchar" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>nama_menu</td>
                <td><input type="varchar" name="nama_menu" value=<?php echo $nama_menu;?>></td>
            </tr>
            <tr> 
                <td>stok_menu</td>
                <td><input type="varchar" name="stok_menu" value=<?php echo $stok_menu;?>></td>
            </tr>
            <tr> 
                <td>id_penjual</td>
                <td><input type="varchar" name="id_penjual" value=<?php echo $id_penjual;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_menu" value=<?php echo $_GET['id_menu'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>