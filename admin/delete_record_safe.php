<?php
include "dbconnect.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitizing the input
    $delete_query = "DELETE FROM registrations WHERE id = $id";

    if (mysqli_query($db, $delete_query)) {
        // Redirect to dashboard with success flag
        header("Location: dashboard.php?status=success");
        exit;
    } else {
        // Redirect to dashboard with error flag
        header("Location: dashboard.php?status=error");
        exit;
    }
} else {
    // Redirect to dashboard with invalid request flag
    header("Location: dashboard.php?status=invalid");
    exit;
}
?>
