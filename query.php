<?php
require_once 'koneksi.php';

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getProjectIds()
{
    global $conn;

    $query = "SELECT id FROM data_monitoring";
    $result = mysqli_query($conn, $query);

    $projectIds = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $projectIds[] = $row['id'];
    }

    return $projectIds;
}
?>
