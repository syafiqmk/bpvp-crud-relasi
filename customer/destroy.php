<?php 
    $id = $_GET['id'];

    $d_customer = "DELETE FROM customers WHERE id = $id";
    $q_d_customer = mysqli_query($conn, $d_customer);

    if($q_d_customer) {
        header("location:index.php?page=customer-index");
    }
?>