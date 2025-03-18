<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}
?>

<body background="dark.png">
    
<nav class="navbar bg-success">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white" > <B><img src="logo.png" alt="Logo" width="20%" > </B></H1></a>
   <SPAN >
    <b >Hello Admin.....!  </b>  
    <br>
  <br>
   <a href="form/logout.php" class="text-decoration-none text-white"> <b >  LOGOUT  </b> </a>
   <br>
  
   <a href="" class="text-decoration-none text-white"><b>USERPANEL</b></a>


   </SPAN>
  </div>
</nav>

<div>
  <h2 class="text-center text-success"> <B> DASHBOARD </B></h2>
</div>
<hr width="100%">
<div class="bg-success text-center ">
  <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">ADD POST</a>

  <a href="" class="text-white text-decoration-none fs-4 fw-bold  px-5">USERS</a>
</div>



</body>
</html>