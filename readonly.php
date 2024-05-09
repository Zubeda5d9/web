<?php
// Start session
// session_start();

// Check if user is logged in and has read-only permission
// if (!isset($_SESSION['txtName']) || !isset($_SESSION['readonly']) || $_SESSION['readonly'] !== true) {
    // Redirect back to login page
    // header("Location: create.php");
    // exit;
    
// }


// Display read-only content here
?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Shopping Zone</title>
     <link rel="stylesheet" href="style.css">
   
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-DnpusQO+cC25/CbjtmWQXzvK7a7Uhxb0T8YhfjZL7dtDePFzABcWRxFzGLOaQzR7fTb6nAN46gqzLp4HnIzKYw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->





   <style>
   input{
   margin: 10px;
 }
 </style>

</head>
<body style="background: rgb(7,123,125);
background: linear-gradient(0deg, rgba(7,123,125,1) 10%, rgba(18,21,122,1) 58%);color:white">
    <center>


     <h4 style="margin-bottom:50px">The user has the permission only to view the data but cannot modify the content.</h4>
        <h1 style="margin-bottom:50px">Admin Dashboard</h1>
        <div class="main">
            <form action="retrieve.php" method="POST" enctype="multipart/form-data" class="row g-3" id="prod_form">
        <div class="col-md-6">
            <label for="productName" class="form-label">Enter Product Name:</label>
            <input type="text" name="name" class="form-control" id="productName" style="width: 400px; color: black;" readonly>

        </div>
        <div class="col-md-6">
            <label for="productPrice" class="form-label">Enter Product Price:</label>
            <input type="text" name="price" class="form-control" id="productPrice" style="width: 400px; color: black;" readonly>

         </div>
        <div class="col-12">
            <label for="productImage" class="form-label">Image:</label>
            <input type="file" name="image" class="form-control" id="productImage" style="width: 400px; color: black;" readonly>
        </div>
        <div class="col-12">
            <button type="submit" name="upload" class="btn btn-primary" style="margin-bottom:50px" disabled>Upload</button>
        </div>
    </form>
</div>

    </center>


        <div class="container">

        <table class="table">
  <thead>
    <tr>
      <th scope="col" style="color:white">Id</th>
      <th scope="col" style="color:white">Name</th>
      <th scope="col" style="color:white">Price</th>
      <th scope="col" style="color:white">Image</th> 
      <th scope="col" style="color:white">Delete</th>
        
      <th scope="col" style="color:white">Update</th>
      
     
      
      
      
      
    </tr>
  </thead>
  <tbody>
     
        <?php 
        

        $con = mysqli_connect('localhost', 'root', '', 'ecommerce');
        $permission = "readonly";

        $pic = mysqli_query($con, "SELECT * FROM `products`");
        while ($row = mysqli_fetch_array($pic)) {
            echo "<tr>
                    <td>$row[Id]</td>
                    <td>$row[Name]</td>
                    <td>$row[Price]</td>
                    <td><img src='$row[Image]' width='200px' height='100px'></td>";
            if ($permission === 'readonly') {
                echo "<td><button class='btn btn-warning' disabled>Delete</button></td>
                    <td><button class='btn btn-warning' disabled>Update</button></td>";
            } 

            echo "</tr>";
        }



?>


</tbody>
</table>
</div>
</body>
</html>
















