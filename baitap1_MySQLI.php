<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid #333;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    class Users{
        function __construct(){
            $this->conn = new mysqli('localhost', 'root', '', 'b1_php2');
        }

        function getUserList(){
            return mysqli_query($this->conn, "SELECT * FROM users");
        }
    }

    $Table = new Users;
    $result = $Table->getUserList();
    echo '<table>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
            </tr>
        ';
    while ($row = $result->fetch_assoc()) {
        echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['email'] . '</td>
                </tr>
            ';
    }
    echo '</table>';


    ?>
</body>

</html>