<?php
    include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>ข้อมูลพนักงาน</h1>
    <table class='table'>
        <tr>
            <th>Username</th>
            <th>City</th>
            <th>Webserver</th>
            <th>role</th>
        </tr>
<?php
    $sql = "SELECT * FROM employee";

    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        echo"
            <tr>
                <td>".$row["username"]."</td>
                <td>".$row["city"]."</td>
                <td>".$row["webserver"]."</td>
                <td>".$row["role"]."</td>
            </tr>
            ";
        }

?>
    </table>
</body>
</html>