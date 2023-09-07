<?php 

    $s_parents = "SELECT p.*, c.city FROM parents p JOIN cities c WHERE p.city_id = c.id ORDER BY p.id DESC";
    $q_s_parents = mysqli_query($conn, $s_parents);
?>

<div class="main-title">
    <h1>Parents</h1>
    <a href="index.php?page=parent-create" class="btn primary"><span class="fa fa-plus"></span> Add new parent</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Ayah</th>
        <th>Ibu</th>
        <th>No. Telepon</th>
        <th>Kota</th>
        <th>Alamat</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_parents)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->father) ?></td>
                    <td><?= htmlspecialchars($data->mother) ?></td>
                    <td><?= htmlspecialchars($data->phone_number) ?></td>
                    <td><?= htmlspecialchars($data->city) ?></td>
                    <td><?= htmlspecialchars($data->address) ?></td>
                    <td class="action">
                        <a href="index.php?page=parent-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=parent-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>