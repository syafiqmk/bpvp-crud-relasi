<?php 

    $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    $q_s_cities = mysqli_query($conn, $s_cities);

    if(isset($_POST['submit'])) {
        $father = ucwords($_POST['father']);
        $mother = ucwords($_POST['mother']);
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);
        $city = $_POST['city'];

        $i_parent = "INSERT INTO parents(father, mother, phone_number, address, city_id) VALUES('$father', '$mother', '$phone', '$address', '$city')";
        $q_i_parent = mysqli_query($conn, $i_parent);

        if($q_i_parent) {
            header("location:index.php?page=parent-index");
        }
    }
?>

<h1>Tambah Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="father">Ayah</label>
            <input type="text" name="father" id="father" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="mother">Ibu</label>
            <input type="text" name="mother" id="mother" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="phone">No. Telepon</label>
            <input type="number" name="phone" id="phone" autocomplete="off" min="0" required>
        </div>

        <div class="input-group">
            <label for="city">Kota</label>
            <select name="city" id="city">
                <?php 
                    while($d_city = mysqli_fetch_object($q_s_cities)) { ?>
                        <option value="<?= $d_city->id ?>"><?= $d_city->city ?></option>
                    <?php }
                ?>
            </select>
        </div>

        <div class="input-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Tambah</button>
            <a href="index.php?page=parent-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>