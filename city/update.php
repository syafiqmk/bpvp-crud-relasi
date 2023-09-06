<?php 

    $id = $_GET['id'];

    $s_city = "SELECT * FROM cities WHERE id = $id";
    $q_s_city = mysqli_query($conn, $s_city);
    $d_city = mysqli_fetch_object($q_s_city);

    if(isset($_POST['submit'])) {
        $city = ucwords($_POST['city']);

        $u_city = "UPDATE cities SET city = '$city' WHERE id = $id";
        $q_u_city = mysqli_query($conn, $u_city);

        if($q_u_city) {
            header("location:index.php?page=city-index");
        }
    }
?>

<h1>Edit Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="city">Nama Kota</label>
            <input type="text" name="city" id="city" autocomplete="off" required value="<?= htmlspecialchars($d_city->city) ?>">
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=city-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>