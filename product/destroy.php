<?php 
    $id = $_GET['id'];

    $d_product = "DELETE FROM products WHERE id = $id";
    $q_d_product = mysqli_query($conn, $d_product);

    if($q_d_product) {
        header("location:index.php?page=product-index");
    }
?>