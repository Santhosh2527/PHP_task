<?php

require('index.php');

$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "Task2";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 200px;
            height: 200px;
        }
        tr{
            text-align: center;
        }
        </style>
</head>
<body>
<div class="flex flex-col">

    <table class="border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 p-2">Id</th>
                <th class="border border-gray-300 p-2">Name</th>
                <th class="border border-gray-300 p-2">Price</th>
                <th class="border border-gray-300 p-2">Image</th>
            </tr>
        </thead>
        <tbody>
    
            <?php

            $sql = "SELECT * FROM info";
            $result = $conn->query($sql);

          if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td class='border border-gray-300 p-2'>" . $row['id'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['name'] . "</td>";
                echo "<td class='border border-gray-300 p-2'>" . $row['address'] . "</td>";
                echo "<td class='border border-gray-300 p-2'><img src='" . $row['image'] . "'></td>";
                echo "</tr>";
            }
        }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>