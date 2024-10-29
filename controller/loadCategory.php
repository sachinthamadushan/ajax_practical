<?php
include 'connection.php';

$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);    

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td><a href='#' class='btn btn-primary'>Edit</a>
        <a href='#' class='btn btn-danger'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
