<?php
$username= $_GET['username'];
$password= $_GET['password'];
if($username== 'admin' && $password=='test'){
    header('Location: http://www.localhost/CrudOperations/dashboard.php?username='.$username);
    exit;
}
else{
    if(!empty($_GET)) // when not submit the form
    {
        echo " values not matched";
    }
    
}
 
?>
<html>
    <head></head>
<body>

<div class="container" >
    <form action="" >
        <div class="field-group">
            <label> Username</label>
            <input type="text"  name="username"/>
       </div>

       <div class="field-group">
            <label> Password</label>
            <input type="password" name="password" />
       </div>

       <div class="field-group">
            <input type="submit" name="" value="login"/>
       </div>
       
    </form>
 </div>
</body>
</html>
