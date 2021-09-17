<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>

    <div class="container">
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Image</th>
        </thead>
        <tbody>
            <?php foreach ($user as $item) : ?>
                <tr>
                    <td><?= $item->id ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->covertRenderer() ?></td>
                    <td><?= $item->avatar ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    </div>

</body>

</html>