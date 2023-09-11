<?php 

    $s_classes = "SELECT * FROM classes ORDER BY id DESC";
    $q_s_classes = mysqli_query($conn, $s_classes);
?>

<div class="main-title">
    <h1>Classes</h1>
    <a href="index.php?page=class-create" class="btn primary"><span class="fa fa-plus"></span> Add new class</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Nama</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_classes)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->class) ?></td>
                    <td class="action">
                        <a href="index.php?page=class-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=class-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>