<?php 

    if(isset($_POST['submit'])) {
        $class = ucwords($_POST['class']);

        $i_class = "INSERT INTO classes(class) VALUES('$class')";
        $q_i_class = mysqli_query($conn, $i_class);

        if($q_i_class) {
            header("location:index.php?page=class-index");
        }
    }
?>

<h1>Tambah Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="class">Nama Kelas</label>
            <input type="text" name="class" id="class" autocomplete="off" required>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Tambah</button>
            <a href="index.php?page=class-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>