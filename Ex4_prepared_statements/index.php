<?php
include_once "autoloader.php";

$db = ConnexionBD::getInstance();

$stmt = $db->query("DESCRIBE student");
$columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
$keys = [];
foreach ($columns as $column) {
    $keys[] = $column['Field'];
}

$elements = $db->query("SELECT * FROM student");

$elements = $elements->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <?php foreach($keys as $key): ?>
                <th scope="col"><?= $key ?></th>
                <?php endforeach ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach($elements as $index=>$element): ?>
            <tr>
                <th scope="row"><?= $index + 1 ?></th>
                <?php foreach($element as $val): ?>
                <td><?= $val ?></td>
                <?php endforeach ?>
                <td>
                    <a href="detailEtudiant.php?id=<?= $element->id ?>">
                        <img src="img/info-icon.jpg" alt="Info Icon" width="30">
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>