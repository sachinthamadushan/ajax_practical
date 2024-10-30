<?php
include 'connection.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);    

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['category'] . '</td>
        <td>
        <a onclick="chengeDetails(' . $row['id'] . ', \'' . $row['category'] . '\'' . '); return false;" class="btn btn-success">Edit</a>
        <a class="btn btn-danger">Delete</a>
        </td>
        </tr>
        ';
    }
} else {
    echo "0 results";
}
