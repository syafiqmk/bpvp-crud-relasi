<?php 
    $id = $_GET['id'];

    $d_city = "DELETE FROM cities WHERE id = $id";
    $q_d_city = mysqli_query($conn, $d_city);

    if($q_d_city) {
        header("location:index.php?page=city-index");
    }
?>