<?php 

    if(isset($_POST['submit'])) {
        $name = ucwords($_POST['name']);
        $desc = ucfirst($_POST['description']);
        $price = $_POST['price'];
        $qty = $_POST['quantity'];

        $img_name = $_FILES['image']['name'];
        $img_tmp = $_FILES['image']['tmp_name'];
        $dir = "uploads/img/";

        $i_product = "INSERT INTO products(name, image, description, price, quantity) VALUES('$name', '$img_name', '$desc', '$price', '$qty')";
        $q_i_product = mysqli_query($conn, $i_product);
        
        move_uploaded_file($img_tmp, $dir.$img_name);

        if($q_i_product) {
            header("location:index.php?page=product-index");
        }
    }
?>

<h1>Tambah Data</h1>

<div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="input-group">
            <label for="name">Nama Barang<span class="red">*</span></label>
            <input type="text" name="name" id="name" autocomplete="off" required>
        </div>

        <div class="input-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" id="image">
        </div>

        <div class="input-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <div class="input-group">
            <label for="price">Harga Satuan<span class="red">*</span></label>
            <input type="number" name="price" id="price" autocomplete="off" min="0" required>
        </div>

        <div class="input-group">
            <label for="quantity">Qty<span class="red">*</span></label>
            <input type="number" name="quantity" id="quantity" autocomplete="off" min="0" required>
        </div>

        <div class="form-button">
            <button type="submit" name="submit" class="btn primary">Tambah</button>
            <a href="index.php?page=product-index" class="btn danger">Cancel</a>
        </div>
    </form>
</div>