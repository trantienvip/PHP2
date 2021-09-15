<?php

require('./item-list.php');
$user = Product::getAll();
echo '<pre>';
var_dump($user);

?>

<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
    </thead>
    <tbody>
        <?php foreach ($user as $item): ?>
            <tr>
                <td><?= $item->id ?></td>
                <td><?= $item->name ?></td>
                <td><?= number_format($item->price).' VNĐ' ?></td>
                <td><?= $item->image ?></td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>