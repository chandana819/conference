<?php
// Include session check if needed
// include "access_check.php";

// Include database connection
include "connect.php";

// Check if ID is provided
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the ID
    
    // First, get the file paths before deleting
    $select_query = "SELECT payment_receipt, abstract FROM registrations WHERE id = ?";
    $stmt = mysqli_prepare($conn, $select_query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if ($row = mysqli_fetch_assoc($result)) {
            $payment_receipt = $row['payment_receipt'];
            $abstract = $row['abstract'];
            
            // Delete the record from database
            $delete_query = "DELETE FROM registrations WHERE id = ?";
            $delete_stmt = mysqli_prepare($conn, $delete_query);
            
            if ($delete_stmt) {
                mysqli_stmt_bind_param($delete_stmt, "i", $id);
                
                if (mysqli_stmt_execute($delete_stmt)) {
                    // Successfully deleted from database
                    
                    // Optionally delete the files from server
                    if (!empty($payment_receipt) && file_exists($payment_receipt)) {
                        @unlink($payment_receipt);
                    }
                    
                    if (!empty($abstract) && file_exists($abstract)) {
                        @unlink($abstract);
                    }
                    
                    mysqli_stmt_close($delete_stmt);
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    
                    // Redirect with success message
                    header("Location: dashboard.php?status=success");
                    exit();
                } else {
                    // Failed to delete
                    mysqli_stmt_close($delete_stmt);
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                    
                    header("Location: dashboard.php?status=error");
                    exit();
                }
            } else {
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                
                header("Location: dashboard.php?status=error");
                exit();
            }
        } else {
            // Record not found
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            
            header("Location: dashboard.php?status=invalid");
            exit();
        }
    } else {
        mysqli_close($conn);
        header("Location: dashboard.php?status=error");
        exit();
    }
} else {
    // No ID provided
    mysqli_close($conn);
    header("Location: dashboard.php?status=invalid");
    exit();
}
?>
