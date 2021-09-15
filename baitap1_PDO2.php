<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #333;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    class Users{
        function __construct(){
            $this->connect = new PDO("mysql:host=localhost;dbname=b1_php2", 'root', '');
        }

        function getUserDESC(){
            $smtp = $this->connect->prepare("SELECT * from users ORDER BY id DESC");
            $smtp->execute();
            return $smtp->fetchAll();
        }
        
        function searchUsers($value_search){
            $smtp = $this->connect->prepare("SELECT * from users WhERE name like '%$value_search%' OR id like '%$value_search%' OR email like '%$value_search%'");
            $smtp->execute();
            return $smtp->fetchAll();
        }
    }

    $listUser = new Users();
    $result = $listUser->getUserDESC();

    echo '<table>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Email</th>
            </tr>';
    foreach ($result as $value) {
        echo '
            <tr>
                <td>'.$value['id'].'</td>
                <td>'.$value['name'].'</td>
                <td>'.$value['email'].'</td>
            </tr>';
    }
    echo '</table>';

    $searchUsers = new Users();
    echo '<form action="" method="post">
        <input type="text" name="ten">
        <input type="submit" name="search">
        </form>';
    
    if (isset($_POST['search'])) {
        $value_search = $_POST['ten'];
        $result2 = $searchUsers->searchUsers($value_search);
        if (!$result2) {
            echo 'Không có kết quả nào khớp';
        }else{
        foreach ($result2 as $value) {
            echo '
                <tr>
                    <td>'.$value['id'].'</td>
                    <td>'.$value['name'].'</td>
                    <td>'.$value['email'].'</td>
                </tr>';
        }
    }
    }


    ?>
</body>

</html>