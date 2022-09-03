<?php
include_once 'db_conn.php';
$sql = "DELETE FROM message WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'admin.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>