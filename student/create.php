<?php

    $s_cities = "SELECT * FROM cities ORDER BY id DESC";
    $q_s_cities = mysqli_query($conn, $s_cities);

    $s_parents = "SELECT * FROM parents ORDER BY id DESC";
    $q_s_parents = mysqli_query($conn, $s_parents);

    $s_classes = "SELECT * FROM classes ORDER BY id DESC";
    $q_s_classes = mysqli_query($conn, $s_classes);

    if (isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);
        $city = $_POST['city'];
        $parent = $_POST['parent'];
        $class = $_POST['class'];

        $i_student = "INSERT INTO students(name, gender, phone_number, address, city_id, parent_id, class_id) VALUES('$name', '$gender', '$phone', '$address', '$city', '$parent', '$class')";
        $q_i_student = mysqli_query($conn, $i_student);

        if ($q_i_student) {
            header("location:index.php?page=student-index");
        }
    }
?>

<h1>Tambah Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" autocomplete="off" required>
        </div>

        <div class="input-group radio">
            <label for="gender">Jenis Kelamin</label>
            <div class="input-radio">
                <input type="radio" name="gender" id="L" value="Laki-laki" required>
                <label for="L">Laki-laki</label>
            </div>
            <div class="input-radio">
                <input type="radio" name="gender" id="P" value="Perempuan" required>
                <label for="P">Perempuan</label>
            </div>
        </div>

        <div class="input-group">
            <label for="phone">No. Telepon</label>
            <input type="number" name="phone" id="phone" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="30" rows="10" required></textarea>
        </div>

        <div class="input-group">
            <label for="city">Kota</label>
            <select name="city" id="city" required>
                <?php 
                    while($d_city = mysqli_fetch_object($q_s_cities)) { ?>
                        <option value="<?= $d_city->id ?>"><?= $d_city->city ?></option>
                    <?php }
                ?>
            </select>
        </div>

        <div class="input-group">
            <label for="parent">Orang tua</label>
            <select name="parent" id="parent" required>
                <?php 
                    while($d_parent = mysqli_fetch_object($q_s_parents)) { ?>
                        <option value="<?= $d_parent->id ?>">Ayah : <?= $d_parent->father ?> | Ibu : <?= $d_parent->mother ?></option>
                    <?php }
                ?>
            </select>
        </div>

        <div class="input-group">
            <label for="class">Kelas</label>
            <select name="class" id="class" required>
                <?php 
                    while($d_class = mysqli_fetch_object($q_s_classes)) { ?>
                        <option value="<?= $d_class->id ?>"><?= $d_class->class ?></option>
                    <?php }
                ?>
            </select>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Tambah</button>
            <a href="index.php?page=student-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>