<?php 
    $id = $_GET['id'];

    $s_product = "SELECT * FROM products WHERE id = $id";
    $q_s_product = mysqli_query($conn, $s_product);
    $d_product = mysqli_fetch_object($q_s_product);

    if(!empty($d_product->image)) {
        unlink('uploads/img/' . $d_product->image);
    }

    $d_product = "DELETE FROM products WHERE id = $id";
    $q_d_product = mysqli_query($conn, $d_product);

    if($q_d_product) {
        header("location:index.php?page=product-index");
    }
?>