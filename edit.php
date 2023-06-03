<?php
include 'config/db.php';
$rows= array(
'firstname'=> '',
'lastname'=> '',
'gender'=> '',
);
//for edit
if(!empty($_GET['lastname']))
{
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $gender=$_GET['gender'];
    $updateid=$_GET['id'];
}

// for Insert new record
if(!empty($_GET['add']))
{
    $sql= "insert into classinfo (firstname, lastname, gender) values ('" .$firstname."', lastname='" .$lastname."',gender='" .$gender."')";

}
    

else if(!empty($_GET['edit'])){
    
    $sql= "update classinfo SET firstname='" .$firstname."', lastname='" .$lastname."',gender='" .$gender."' where id=".$updateid;
    
    
 
    
}
if($sql)
{

    if($_GET['add']&& $result)
    {
        $id=$conn->insert_id();
     echo"Added Successfully";
    }
    elseif($_GET['edit']&& $result){
        $id= $_GET['id'];
        echo"Updated Successfully";
    }
}
else{
    $id=$_GET['id'];
}
//read data

$editid=$_GET['id'];
$sql= "select * from classinfo where id=" .$id;
$result= $conn->query($sql);
if($result->num_rows>0){
    $rows= $result->fetch_assoc();
}
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
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class=""container>
        <div class="menu">
                <div class="user">
                    <div class="username">
                   
                    </div>
                    <div class="logout">
                    <a href="http://localhost/CrudOperations/index.html">logout</a>
                    </div>
                    
                </div>
            </div>




            <div class="contentshow">
                <form>
                <div class="field-group">
                <label> firstname</label>
                 <input type="text"  name="firstname" value="<?php echo $rows['firstname'];?>"/>
                </div>
                <div class="field-group">
                <label> lastname</label>
                 <input type="text"  name="lastname" value="<?php echo $rows['lastname'];?>"/>
                </div>
                
                <div class="field-group">
                <label> Gender</label>
                 <input type="text"  name="gender"value="<?php echo $rows['gender'];?>"/>
                </div>
                <br><br>
                <div class="field-group ib">
                <?php
                if(!empty($_GET['id'])){
                  ?>  
                  <input type="hidden" name="id" value="<?php echo $rows['id']; ?>"/>
                  <input type="hidden" name="edit" value="1"/>
                  <input type="submit" value="update">
                  <?php 
                }
                else{
                    ?>
                    <input type="hidden" value="Add" value="1">
                    <input type="submit" value="Add">
                    <?php
                }
                ?>
                </div>
                <br><br>
                <div class="field-group ib">
                <a class="btn btn-default" href="dashboard.php">Goto Dashboard</a>
                </div>

                </form>
            </div>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>