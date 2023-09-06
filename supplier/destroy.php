<?php 
    $id = $_GET['id'];

    $d_supplier = "DELETE FROM suppliers WHERE id = $id";
    $q_d_supplier = mysqli_query($conn, $d_supplier);

    if($q_d_supplier) {
        header("location:index.php?page=supplier-index");
    }
?>