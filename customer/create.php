<?php 

    if(isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $phone = $_POST['phone'];
        $address = ucwords($_POST['address']);

        $i_customer = "INSERT INTO customers(name, phone_number, address) VALUES('$name', '$phone', '$address')";
        $q_i_customer = mysqli_query($conn, $i_customer);

        if($q_i_customer) {
            header("location:index.php?page=customer-index");
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

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary"><span class="fa fa-floppy-disk"></span> Tambah</button>
            <a href="index.php?page=customer-index" class="btn danger"><span class="fa fa-xmark"></span> Cancel</a>
        </div>
    </form>
</div>