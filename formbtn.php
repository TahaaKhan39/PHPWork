<?php
include('concon.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="uname" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="uemail" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="upass" required><br><br>

        <input type="submit" value="Submit" name="btnadd">
    </form>





</body>
</html>
<?php
if($add=isset($_POST['btnadd'])){
$name=$_POST['uname'];
$email=$_POST['uemail'];
$pass=$_POST['upass'];

$query=mysqli_query($con,"INSERT INTO `tahatable`(`name`, `email`, `pass`)
 VALUES ('$name','$email','$pass')");


}




?>