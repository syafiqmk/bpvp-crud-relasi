<?php 
    $id = $_GET['id'];

    $d_parent = "DELETE FROM parents WHERE id = $id";
    $q_d_parent = mysqli_query($conn, $d_parent);

    if($q_d_parent) {
        header("location:index.php?page=parent-index");
    }
?>