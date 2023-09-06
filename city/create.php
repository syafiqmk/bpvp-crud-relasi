<?php 

    if(isset($_POST['submit'])) {
        $city = ucwords($_POST['city']);

        $i_city = "INSERT INTO cities(city) VALUES('$city')";
        $q_i_city = mysqli_query($conn, $i_city);

        if($q_i_city) {
            header("location:index.php?page=city-index");
        }
    }
?>

<h1>Tambah Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="city">Nama Kota</label>
            <input type="text" name="city" id="city" autocomplete="off" required>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Tambah</button>
            <a href="index.php?page=city-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>