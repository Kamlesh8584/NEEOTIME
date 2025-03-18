<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME Page</title>
<?php
include'header.php';
?>

</head>
<body background="dark.png">
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row">


  
    <h1 class="text-success font-monospace my-3 text-center "></h1>
    <?php
    include 'config.php';
    $Record = mysqli_query($con, "select * from tblproduct");
    
    while($row = mysqli_fetch_array($Record)) {
      $checkpage = $row['Category'];
      if($checkpage ==='Home') {
  echo "         
    <div class='col-md-6 col-lg-4 m-auto mb-3'> 
    <form action = 'Insertcart.php' method='POST'>

<div class='card m-auto' style='width: 14rem;  background-color:rgb(0, 0, 0); color: white; border: 1px solid #333;transition: transform 0.3s ease, box-shadow 0.3s;'  onmouseover='this.style.transform=\"scale(1.05)\"; this.style.boxShadow=\"0px 4px 10px rgba(255, 255, 255, 0.2)\";' onmouseout='this.style.transform=\"scale(1)\"; this.style.boxShadow=\"none\";' >
  <img src='../admin/product/$row[Pimage]' class='card-img-top ' >
  <div class='card-body text-center'>
    <h5 class='card-title text-success fs-6 fw-bold';' >$row[Pname]</h5>
    <p class='card-text fs-7 fw-bold'> RS: $row[Pprice] </p>
      <input type = 'hidden' name = 'Pname' value = '$row[Pname]' >
            <input type = 'hidden' name = 'Pprice' value = '$row[Pprice]' >
            <input type = 'hidden' name = 'Pdetails' value = '$row[Pdetails]' >
            <input type = 'hidden' name = 'Pimage' value = '$row[Pimage]' >
      <input type='submit' name = 'addCart' class='btn btn-success text-white w-20' value='Add to Cart'
    <p> </p>

    </div>
</div>  

</form>
</div>
";
}
}
?>
</div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-4">
    <div class="container">
        <p class="mb-1">&copy; 2025 NEEOTIME. All Rights Reserved.</p>
        <nav>
            <a href="privacy-policy.php" class="text-white text-decoration-none mx-2">Privacy Policy</a> |
            <a href="terms.php" class="text-white text-decoration-none mx-2">Terms of Service</a> |
            <a href="contact.php" class="text-white text-decoration-none mx-2">Contact Us</a>
        </nav>
    </div>
</footer>
</body>
</html>
