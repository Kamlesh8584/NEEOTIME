<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
<?php
    include 'header.php';
?>

<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center bg-black mb-5 rounded">
        <h1 class="text-success">Cart</h1>
    </div>

    </div>
</div>
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table text-center text-success table-bordered">
                    <thead class="bg-Success text-white fs-5">
                        <th>Index no</th>
                        <th>Produce Name</th>
                        <th> Produce Details</th>
                        <th>Product Price</th>
                        <th>Delete</th>
                    </thead>

<tbody>
    <?php
        session_start();
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $value){
             echo "
                <form action = 'Insertcart.php' method = 'POST'>

              <tr>
              <td>$key</td>
                <td>$value[Productname]</td>
                <td>$value[Pdetails]</td>
                <td>$value[Productprice]</td>
                <td><button name='remove' class = 'btn btn-success'>Delete</button></td>
                <td> <input type = 'text' name = 'item' value= '$value[Productname]'> </input> </td>
                </tr>  
            </form>
              ";
            
            }

        }    
    ?>
</tbody>

                </table>
            </div>
        </div>
    </div>



</body>

</html>