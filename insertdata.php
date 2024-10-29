<?php
include('firstconnection.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="table">
<thead>
<tr>
<th>id  </th>
<th>name  </th>
<th>email  </th>
<th>password  </th>

</tr>
</thead>
<tbody>

<?php
$query= mysqli_query(mysql: $con, query: "SELECT * FROM `tahatable`");
while($col=mysqli_fetch_array(result: $query)){

    ?>
<tr>
    <td scope="row"><?php echo $col[0]?></td>
    <td><?php echo $col[1]?></td>
    <td><?php echo $col[2]?></td>
    <td><?php echo $col[3]?></td>
    <td><a href="?id= <?php echo $col[0]?>" class="btn btn-danger">delete</a> 
    <a href="" class="btn btn-info">update</a> </td>
</tr>
<?php  } ?>







</tbody>



</table>










</body>
</html>

<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$del=mysqli_query($con,"DELETE FROM `tahatable` WHERE id=$id");
if($del){

  echo "<script> alert('data deleted');
  location.assign('insertdata.php');
  </script>";
}


}





?>