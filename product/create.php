<?php 

    if(isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $desc = ucfirst($_POST['description']);
        $price = $_POST['price'];
        $qty = $_POST['quantity'];

        $i_product = "INSERT INTO products(name, description, price, quantity) VALUES('$name', '$desc', '$price', '$qty')";
        $q_i_product = mysqli_query($conn, $i_product);

        if($q_i_product) {
            header("location:index.php?page=product-index");
        }
    }
?>

<h1>Tambah Data</h1>

<div class="form">
    <form action="" method="post">
        <div class="input-group">
            <label for="name">Nama Barang</label>
            <input type="text" name="name" id="name" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="input-group">
            <label for="price">Harga Satuan</label>
            <input type="number" name="price" id="price" autocomplete="off" min="0" required>
        </div>

        <div class="input-group">
            <label for="quantity">Qty</label>
            <input type="number" name="quantity" id="quantity" autocomplete="off" min="0" required>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary">Tambah</button>
            <a href="index.php?page=product-index" class="btn danger">Cancel</a>
        </div>
    </form>
</div>