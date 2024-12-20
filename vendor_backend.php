<?php require('connection.php');
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $price = $_POST["price"];
        $stock = $_POST["stock"];
        $category = $_POST["category"];
        $description = $_POST["description"];
        $image = $_FILES["image"]['name'];

        $query = "Insert into product values('','$name', '$price','$stock', '$category','$description','$image');";
        $reasult = mysqli_query($connection,$query);
        if($reasult){
            move_uploaded_file($_FILES['image']['tmp_name'], "$image");
            echo "<script> alert('Product submitted'); </script>";
            header ('Location:vendor.php');
        }
    }
   
?>