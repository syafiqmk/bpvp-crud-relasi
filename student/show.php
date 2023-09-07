<?php 
    $id = $_GET['id'];

    $s_student = "SELECT students.id AS sid, students.name, students.gender, students.phone_number AS sphone, students.address AS saddress, sc.city AS scity, cl.class, parents.father, parents.mother, parents.phone_number AS pphone, parents.address AS paddress, pc.city AS pcity
                    FROM students JOIN parents ON students.parent_id = parents.id
                        JOIN cities sc ON students.city_id = sc.id
                        JOIN classes cl ON students.class_id = cl.id
                        JOIN cities pc on parents.city_id = pc.id
                    WHERE students.id = $id
                    ORDER BY students.id DESC";
    $q_s_student = mysqli_query($conn, $s_student);
    $d_student = mysqli_fetch_object($q_s_student);

?>

<div class="main-title">
    <h1>Student Data</h1>
    <div>
        <a href="index.php?page=student-index" class="btn primary"><div class="fa fa-door-open"></div> Kembali</a>
        <a href="index.php?page=student-update&id=<?= $d_student->sid ?>" class="btn success"><span class="fa fa-edit"></span> Edit</a>
        <a class="btn danger" onclick="deleteConfirm('index.php?page=student-destroy&id=<?= $d_student->sid ?>')"><span class="fa fa-trash"></span> Hapus</a>
    </div>
</div>

<table border="1">
    <tr>
        <td width="20%">Nama</td>
        <td><?= htmlspecialchars($d_student->name) ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><?= htmlspecialchars($d_student->gender) ?></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><?= htmlspecialchars($d_student->class) ?></td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td><?= htmlspecialchars($d_student->sphone) ?></td>
    </tr>
    <tr>
        <td>Kota</td>
        <td><?= htmlspecialchars($d_student->scity) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?= htmlspecialchars($d_student->saddress) ?></td>
    </tr>
</table>

<br><br>
<div class="main-title">
    <h1>Parent Data</h1>
</div>

<table border="1">
    <tr>
        <td width="20%">Ayah</td>
        <td><?= htmlspecialchars($d_student->father) ?></td>
    </tr>
    <tr>
        <td>Ibu</td>
        <td><?= htmlspecialchars($d_student->mother) ?></td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td><?= htmlspecialchars($d_student->pphone) ?></td>
    </tr>
    <tr>
        <td>Kota</td>
        <td><?= htmlspecialchars($d_student->pcity) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><?= htmlspecialchars($d_student->paddress) ?></td>
    </tr>
</table>