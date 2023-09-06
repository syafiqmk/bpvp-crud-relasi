<?php 

    $s_suppliers = "SELECT * FROM suppliers ORDER BY id DESC";
    $q_s_suppliers = mysqli_query($conn, $s_suppliers);
?>

<div class="main-title">
    <h1>Suppliers</h1>
    <a href="index.php?page=supplier-create" class="btn primary"><span class="fa fa-plus"></span> Add new supplier</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Nama</th>
        <th>No. Telepon</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_suppliers)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->name) ?></td>
                    <td><?= htmlspecialchars($data->phone_number) ?></td>
                    <td><?= htmlspecialchars($data->address) ?></td>
                    <td><?= htmlspecialchars($data->status) ?></td>
                    <td class="action">
                        <a href="index.php?page=supplier-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=supplier-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>