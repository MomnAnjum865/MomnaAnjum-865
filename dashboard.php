<?php
include 'config/db.php';
$username='';
if(!empty($_GET['username']))
{
    $username= $_GET['username'];
}
$sql="select * from classinfo";
$result= $conn->query($sql);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="conatiner">
            <div class="menu">
                <div class="user">
                    <div class="username">
                    <?php
                    echo $username;
                    ?>
                    </div>
                    <div class="logout">
                    <a href="http://localhost/CrudOperations/index.html">logout</a>
                    </div>
                </div>
            </div>
            <div class="contentshow">
            <div class="controls">
                <a class="btn btn-default" href="edit.php?add=1">Insert</a>
            </div>
            <br>
<table>
<?php
if($result->num_rows >0){
    while($rows =$result->fetch_assoc()){
 ?>
       <tr>
        <td>
            <?php echo $rows['id']; ?>
        </td>
        <td>
            <?php echo $rows['firstname']; ?>
        </td>
        <td>
            <?php echo $rows['lastname']; ?>
        </td>
        <td>
            <?php echo $rows['gender']; ?>
        </td>
        <td>
            <a href="http://localhost/CrudOperations/edit.php?id=<?php echo $rows['id'];?>"> Edit</a>
        </td>
        <td>
            <a href="">Delete</a>
        </td>
       </tr>
       <?php
    }
}
?>
</table>        
</div>
</div>
    <script src="" async defer></script>
    </body>
</html>