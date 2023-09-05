<?php 

    $s_customers = "SELECT * FROM customers ORDER BY id DESC";
    $q_s_customers = mysqli_query($conn, $s_customers);
?>

<div class="main-title">
    <h1>Customers</h1>
    <a href="index.php?page=customer-create" class="btn primary"><span class="fa fa-plus"></span> Add new customer</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Nama</th>
        <th>No. Telepon</th>
        <th>Alamat</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_customers)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->name) ?></td>
                    <td><?= htmlspecialchars($data->phone_number) ?></td>
                    <td><?= htmlspecialchars($data->address) ?></td>
                    <td class="action">
                        <a href="index.php?page=customer-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=customer-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>