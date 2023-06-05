<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List USer Blade Template</h1>
    <?php 
        $arrayProduct = [
            ["id" => 2, "name" => "Product A", "price" => 32000],
            ["id" => 4, "name" => "Product B", "price" => 34000],
            ["id" => 6, "name" => "Product C", "price" => 36000],
            ["id" => 8, "name" => "Product D", "price" => 38000],
            ["id" => 10, "name" => "Product E", "price" => 40000],
        ]
    ?>


    <table border="1">
        <tr><td>stt</td>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        </tr>
        <?php foreach ($arrayProduct as $key => $value) { ?>
            <tr>
                <td><?=$key+1?></td>
                <td><?=$value["id"]?></td>
                <td><?=$value["name"]?></td>
                <td><?=$value["price"]?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>