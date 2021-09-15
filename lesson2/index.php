<?php

require('./User.php');
$user = User::getAll();
echo '<pre>';
var_dump($user);

?>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
    </thead>
    <tbody>
        <?php foreach ($user as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->covertRenderer() ?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>