<?php
include 'connect.php';
$con = getConnection();
global $con;
global $result;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>description</th>
            </tr>
            
        </table>
    </div>
</body>

</html>