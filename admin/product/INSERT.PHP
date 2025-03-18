<?php
  
  if(isset($_POST['submit'])){

    include 'config.php';
    
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];

    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];

        $img_des ="uploadimage/".$image_name;
    move_uploaded_file($image_loc, "uploadimage/".$image_name);
    $product_details = $_POST['Pdetails'];
    $product_category = $_POST['pages'];

    mysqli_query($con,"INSERT INTO `tblproduct`( `Pname`, `Pprice`, `Pimage`, `Pdetails`, `Category`) VALUES ('$product_name','$product_price','$img_des','$product_details','$product_category')");

        
}
 
?>

