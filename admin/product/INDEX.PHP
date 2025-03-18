<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body background="dark.png">
    

        <div class="container" >
            <div class="row">
                <div class="col-md-6 m-auto border border-primary mt-3 bg-white">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">

                            <p class="text-center fw-bold fs-3 text-warning">Product Detail</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Name:</label>
                            <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Price:</label>
                            <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Image:</label>
                            <input type="file" name="Pimage"class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Product Details:</label>
                            <input type="text" name="Pdetails"class="form-control" placeholder="Enter Product Detail">
                        </div>
                          <div class="mb-3">
                          <label class="form-label">Category</label>
                          <select class="form-select" name="pages">
  <option selected>Home</option>
  <option value="Men">Men</option>
  <option value="Women">Women</option>
  <option value="Smart watch">Smart watch</option>
</select>
                          </div>  

                        <button name="submit" class="bg-success fs-4 fw-bold my-3  form-control text-white">Upload</button>

                    </form>
                </div>
            </div>
        </div>

    </form>

    <div class="container">
        <div class="row">
            <div class="col-md-9 m-auto">
            

    <table class="table table-hover table-border border-success">
  
  <thead class= " table-success text-white fs-5 font-monospace text-center">
  <th>ID</th>
  <th>Name</th>
  <th>Price</th>
  <th>Image</th>
  <th>Details</th>
  <th>category</th>
  <th>Delete</th>
    
  </thead>
  
  
    <tbody class="text-center">
  <?php
        include 'config.php';
        $Record = mysqli_query($con, "SELECT * FROM tblproduct");

while($row = mysqli_fetch_array($Record))

echo"  
     <tr>
        <td>$row[ID]</td>
        <td>$row[Pname]</td>
        <td>$row[Pprice]</td>
        <td><img src='$row[Pimage]' height='90px'></td>
        <td>$row[Pdetails]</td>
        <td>$row[Category]</td>


        <td><a href='' class= ' btn btn-success'>Delete</a></td>
    </tr>
";



?>

    </tbody>
  </table>
    
  </div>

</div>
</div>

</body>

</html>
