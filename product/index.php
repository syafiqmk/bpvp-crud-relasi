<?php 

    $s_products = "SELECT * FROM products ORDER BY id DESC";
    $q_s_products = mysqli_query($conn, $s_products);
?>

<div class="main-title">
    <h1>Products</h1>
    <a href="index.php?page=product-create" class="btn primary"><span class="fa fa-plus"></span> Add new products</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Deskripsi</th>
        <th>Harga Satuan</th>
        <th>Qty</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_products)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars(ucwords($data->name)) ?></td>
                    <td><?= htmlspecialchars($data->description) ?></td>
                    <td>Rp. <?= htmlspecialchars(number_format($data->price, 0, '.', '.')) ?></td>
                    <td><?= htmlspecialchars($data->quantity) ?></td>
                    <td class="action">
                        <a href="index.php?page=product-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span> Edit</a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=product-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span> Hapus</a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>