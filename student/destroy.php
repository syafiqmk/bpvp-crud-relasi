<?php 
    $id = $_GET['id'];

    $d_student = "DELETE FROM students WHERE id = $id";
    $q_d_student = mysqli_query($conn, $d_student);

    if($q_d_student) {
        header("location:index.php?page=student-index");
    }
?>