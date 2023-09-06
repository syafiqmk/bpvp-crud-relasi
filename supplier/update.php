<?php 

    $id = $_GET['id'];

    $s_supplier = "SELECT * FROM suppliers WHERE id = $id";
    $q_s_supplier = mysqli_query($conn, $s_supplier);
    $d_supplier = mysqli_fetch_object($q_s_supplier);

    if(isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);
        $status = $_POST['status'];

        $u_supplier = "UPDATE suppliers SET name = '$name', phone_number = '$phone', address = '$address', status = '$status' WHERE id = $id";
        $q_u_supplier = mysqli_query($conn, $u_supplier);

        if($q_u_supplier) {
            header("location:index.php?page=supplier-index");
        }
    }
?>

<h1>Edit Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" autocomplete="off" required value="<?= htmlspecialchars($d_supplier->name) ?>">
        </div>
    
        <div class="input-group">
            <label for="phone">No. Telepon</label>
            <input type="number" min="0" name="phone" id="phone" autocomplete="off" required value="<?= htmlspecialchars($d_supplier->phone_number) ?>">
        </div>
    
        <div class="input-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="30" rows="10"><?= htmlspecialchars($d_supplier->address) ?></textarea>
        </div>

        <div class="input-group radio">
            <label for="status">Status</label>
            <div class="input-radio">
                <input type="radio" name="status" id="statusA" value="A" <?= ($d_supplier->status == 'A') ? 'checked' : '' ?>>
                <label for="statusA">Aktif</label>
            </div>

            <div class="input-radio">
                <input type="radio" name="status" id="statusTA" value="TA" <?= ($d_supplier->status == 'TA') ? 'checked' : '' ?>>
                <label for="statusTA">Tidak Aktif</label>
            </div>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=supplier-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>