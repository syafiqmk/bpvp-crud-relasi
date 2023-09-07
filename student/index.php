<?php 

    $s_students = "SELECT s.*, c.city, cl.class FROM students s JOIN cities c JOIN classes cl WHERE s.city_id = c.id AND s.class_id = cl.id ORDER BY s.id DESC";
    $q_s_students = mysqli_query($conn, $s_students);
?>

<div class="main-title">
    <h1>Students</h1>
    <a href="index.php?page=student-create" class="btn primary"><span class="fa fa-plus"></span> Add new student</a>
</div>

<table border="1">
    <thead>
        <th>No.</th>
        <th>Kelas</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No. Telepon</th>
        <th>Kota</th>
        <th>Alamat</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            while($data = mysqli_fetch_object($q_s_students)) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data->class) ?></td>
                    <td><?= htmlspecialchars($data->name) ?></td>
                    <td><?= htmlspecialchars($data->gender) ?></td>
                    <td><?= htmlspecialchars($data->phone_number) ?></td>
                    <td><?= htmlspecialchars($data->city) ?></td>
                    <td><?= htmlspecialchars($data->address) ?></td>
                    <td class="action">
                        <a href="index.php?page=student-show&id=<?= $data->id ?>" class="btn primary"><span class="fa fa-eye"></span></a>
                        <a href="index.php?page=student-update&id=<?= $data->id ?>" class="btn success"><span class="fa fa-edit"></span></a>
                        <a class="btn danger" onclick="deleteConfirm('index.php?page=student-destroy&id=<?= $data->id ?>')"><span class="fa fa-trash"></span></a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>