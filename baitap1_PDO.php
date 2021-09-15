<!DOCTYPE html>
<html lang="en">
<?php ob_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            grid-row-gap: 1rem;
        }

        table,
        th,
        td {
            border: 1px solid #333;
            border-collapse: collapse;
            text-align: center;
            padding: 20px;
        }

        a {
            text-decoration: none;
        }

        button {
            padding: 10px 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        input {
            padding: 5px 10px;
            outline: none;
            border-radius: 5px;
            border: 1px solid #333;
        }
        #formAdd{
            display: none;
        }
        #table{
            display: block;
            border: none;
        }
        #table.active{
            display: none;
        }
        #formAdd.active{
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        require('./lib.php');

        $table = new Users();
        $table->table = 'users';
        $result = $table->getUserList();
        echo '<table id="table">
            <thead>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th colspan="2">Chức năng</th>
            </thead>';
        foreach ($result as $row) {
            echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['email'] . '</td>
                <td><a href="?del=' . $row['id'] . '">Xóa</a></td>
                <td>
                    <form action="" method="post">
                        <input type="text" name="name" id="">
                        <button type="subtmit" value="' . $row['id'] . '" name="submit">Đổi tên</button>
                    </form>
                </td>
            </tr>';
        }
        echo '</table>';
        echo '<form id="formAdd" action="" method="post">
                <input type="text" name="addName" id="" placeholder="Nhập tên">
                <input type="text" name="addEmail" id="" placeholder="Nhập email">
                <button type="submit" id="btnAddUser" name="btnAddUser">Thêm</button>
            </form>';
        echo '<button id="btnAdd">Thêm</button>';

        if (isset($_GET['del'])) {
            $table->deleteUsers($_GET['del']);
            header('location: baitap1_PDO.php');
        }
        if (isset($_POST['submit'])) {
            $table->updateNameUsers($_POST['submit'], $_POST['name']);
            header('location: baitap1_PDO.php');
        }
        if (isset($_POST['btnAddUser'])) {
            $table->addUsers($_POST['addName'], $_POST['addEmail']);
            header('location: baitap1_PDO.php');
        }

        ?>
    </div>

    <script>
        var btnAdd = document.querySelector('#btnAdd');
        btnAdd.addEventListener('click', ()=>{
            document.querySelector('#table').classList.toggle('active');
            document.querySelector('#formAdd').classList.toggle('active');
            btnAdd.style.display = 'none';
        });
    </script>
</body>

</html>