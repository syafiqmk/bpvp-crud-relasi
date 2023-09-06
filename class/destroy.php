<?php 
    $id = $_GET['id'];

    $d_class = "DELETE FROM classes WHERE id = $id";
    $q_d_class = mysqli_query($conn, $d_class);

    if($q_d_class) {
        header("location:index.php?page=class-index");
    }
?>