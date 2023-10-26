<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id_penjual'];
    
    $nama_penjual=$_POST['nama_penjual'];
    $id_penjual=$_POST['id_penjual'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET nama_penjual='$nama_penjual',id_penjual='$id_penjual',alamat='$alamat',no_hp='$no_hp' WHERE id_penjual=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id_penjual'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_penjual=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama_penjual = $user_data['nama_pejual'];
    $id_penjual = $user_data['id_penjual'];
    $alamat = $user_data['alamat'];
    $no_hp = $user_data['no_hp'];
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
                <td>nama_penjual</td>
                <td><input type="text" name="nama_penjual" value=<?php echo $nama_penjual;?>></td>
            </tr>
            <tr> 
                <td>id_penjual</td>
                <td><input type="text" name="id_penjual" value=<?php echo $id_penjual;?>></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>no_hp</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penjual" value=<?php echo $_GET['id_penjual'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>