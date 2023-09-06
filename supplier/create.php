<?php 

    if(isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);
        $status = $_POST['status'];

        $i_supplier = "INSERT INTO suppliers(name, phone_number, address, status) VALUES('$name', '$phone', '$address', '$status')";
        $q_i_supplier = mysqli_query($conn, $i_supplier);

        if($q_i_supplier) {
            header("location:index.php?page=supplier-index");
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
    
        <div class="input-group">
            <label for="phone">No. Telepon</label>
            <input type="number" min="0" name="phone" id="phone" autocomplete="off" required>
        </div>
    
        <div class="input-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </div>

        <div class="input-group radio">
            <label for="status">Status</label>
            <div class="input-radio">
                <input type="radio" name="status" id="statusA" value="A">
                <label for="statusA">Aktif</label>
            </div>

            <div class="input-radio">
                <input type="radio" name="status" id="statusTA" value="TA">
                <label for="statusTA">Tidak Aktif</label>
            </div>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Tambah</button>
            <a href="index.php?page=supplier-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>