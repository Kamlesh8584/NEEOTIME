<?php

    session_start();
    //session_destroy();$product_name = isset($_POST['Pname']) ? $_POST['Pname'] : null;
$product_price = isset($_POST['Pprice']) ? $_POST['Pprice'] : null;
$product_details = isset($_POST['Pdetails']) ? $_POST['Pdetails'] : null;


if(isset($_POST['addCart']))
    {
        $check_product = isset($_SESSION['cart']) ? array_column($_SESSION['cart'], 'Productname') : [];
        if(in_array($product_name, $check_product)){
            echo"
                <script>
                      alert('product already added');
                      window.location.href = 'index.php';  
                </script>
            ";

        }
else{
        $product_name = $_POST['Pname'];
         $product_price = $_POST['Pprice'];
         $product_details = $_POST['Pdetails'];
        
         $_SESSION['cart'] []= array('Productname' => $product_name, 'Productprice' => $product_price, 'Pdetails' => $product_details);

         header("location:Cart.php");
    }

}

    

?>