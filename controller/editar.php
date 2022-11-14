<?php 

print($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar HOSPITAL</title>
</head>
<body>
<div>

    <Form method="post" action="config/editarproceso.php">
        <table>
            <tr>
                <td>CODIGO DEL HOSPITAL</td>
                <td><input type="Number" name="codigoh2"></td>
            </tr>
            <tr>
                <td>NOMBRE DEL HOSPITAL</td>
                <td><input type="text" name="nombreh2"></td>
            </tr>
        </table>
    </Form>
</div>
</body>
</html>