<?php 

    $id = $_GET['id'];

    $s_customer = "SELECT * FROM customers WHERE id = $id";
    $q_s_customer = mysqli_query($conn, $s_customer);
    $d_customer = mysqli_fetch_object($q_s_customer);

    if(isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);

        $u_customer = "UPDATE customers SET name = '$name', phone_number = '$phone', address = '$address' WHERE id = $id";
        $q_u_customer = mysqli_query($conn, $u_customer);

        if($q_u_customer) {
            header("location:index.php?page=customer-index");
        }
    }
?>

<h1>Edit Data</h1>

<div class="form">
    <form action="" method="POST">
        <div class="input-group">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" autocomplete="off" required value="<?= htmlspecialchars($d_customer->name) ?>">
        </div>
    
        <div class="input-group">
            <label for="phone">No. Telepon</label>
            <input type="number" min="0" name="phone" id="phone" autocomplete="off" required value="<?= htmlspecialchars($d_customer->phone_number) ?>">
        </div>
    
        <div class="input-group">
            <label for="address">Alamat</label>
            <textarea name="address" id="address" cols="30" rows="10"><?= htmlspecialchars($d_customer->address) ?></textarea>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Simpan</button>
            <a href="index.php?page=customer-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>