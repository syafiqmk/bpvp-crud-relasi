<?php 

    $id = $_GET['id'];

    $s_class = "SELECT * FROM classes WHERE id = $id";
    $q_s_class = mysqli_query($conn, $s_class);
    $d_class = mysqli_fetch_object($q_s_class);

    if(isset($_POST['submit'])) {
        $class = ucwords($_POST['class']);

        $u_class = "UPDATE classes SET class = '$class' WHERE id = $id";
        $q_u_class = mysqli_query($conn, $u_class);

        if($q_u_class) {
            header("location:index.php?page=class-index");
        }
    }
?>

<h1>Edit Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="class">Nama Kelas</label>
            <input type="text" name="class" id="class" autocomplete="off" required value="<?= htmlspecialchars($d_class->class) ?>">
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=class-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>