<?php


$con = mysqli_connect('localhost','root','','ecommerce');


if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "Images/".$img_name;
    move_uploaded_file($img_loc,'Images/'.$img_name);

    mysqli_query($con,"UPDATE `products` SET `Name`='$NAME',`Price`='$PRICE',`Image`='$img_des' WHERE Id = '$ID' ");
    header("location:index.php");


}
?>