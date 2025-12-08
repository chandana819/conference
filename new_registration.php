<?php
include 'connect.php';

if(isset($_POST['register'])) {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $affiliation = mysqli_real_escape_string($conn, $_POST['affiliation']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $transaction_id = mysqli_real_escape_string($conn, $_POST['transaction']);
    
    // Handle payment receipt file upload
    $payment_receipt = '';
    if(isset($_FILES['receipt']) && $_FILES['receipt']['error'] == 0) {
        $receipt_name = $_FILES['receipt']['name'];
        $receipt_tmp = $_FILES['receipt']['tmp_name'];
        $receipt_ext = pathinfo($receipt_name, PATHINFO_EXTENSION);
        
        // Generate unique filename with ID
        $auto_id = time() . '_' . uniqid();
        $payment_receipt_filename = 'receipt_' . $auto_id . '.' . $receipt_ext;
        
        // Create uploads directory if it doesn't exist
        if (!file_exists('uploads/payments/')) {
            mkdir('uploads/payments/', 0777, true);
        }
        
        // Move file and store full path
        if(move_uploaded_file($receipt_tmp, "uploads/payments/$payment_receipt_filename")) {
            $payment_receipt = "uploads/payments/$payment_receipt_filename";
        }
    }
    
    // Handle abstract file upload
    $abstract_file = '';
    if(isset($_FILES['abstract']) && $_FILES['abstract']['error'] == 0) {
        $abstract_name = $_FILES['abstract']['name'];
        $abstract_tmp = $_FILES['abstract']['tmp_name'];
        $abstract_ext = pathinfo($abstract_name, PATHINFO_EXTENSION);
        
        // Generate unique filename with ID
        $auto_id = time() . '_' . uniqid();
        $abstract_filename = 'abstract_' . $auto_id . '.' . $abstract_ext;
        
        // Create uploads directory if it doesn't exist
        if (!file_exists('uploads/abstracts/')) {
            mkdir('uploads/abstracts/', 0777, true);
        }
        
        // Move file and store full path
        if(move_uploaded_file($abstract_tmp, "uploads/abstracts/$abstract_filename")) {
            $abstract_file = "uploads/abstracts/$abstract_filename";
        }
    }
    
    // Insert into database only if both files were uploaded successfully
    if(!empty($payment_receipt) && !empty($abstract_file) && !empty($transaction_id) && !empty($name) && !empty($affiliation) && !empty($mobile) && !empty($email)) {
        $sql = "INSERT INTO registrations (name, affiliation, mobile, email, transaction_id, payment_receipt, abstract) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $name, $affiliation, $mobile, $email, $transaction_id, $payment_receipt, $abstract_file);
            
            if (mysqli_stmt_execute($stmt)) {
                $inserted_id = mysqli_insert_id($conn);
                echo '<script>
                    alert("Registration submitted successfully! Your Registration ID is: ' . $inserted_id . '\\n\\nName: ' . $name . '\\nEmail: ' . $email . '");
                    window.location = "register.php";
                </script>';
            } else {
                echo '<script>
                    alert("Database Error: ' . mysqli_error($conn) . '");
                    window.history.back();
                </script>';
            }
            
            mysqli_stmt_close($stmt);
        } else {
            echo '<script>
                alert("Database preparation error: ' . mysqli_error($conn) . '");
                window.history.back();
            </script>';
        }
    } else {
        echo '<script>
            alert("Error: Please fill all fields and upload both files!");
            window.history.back();
        </script>';
    }
    
    mysqli_close($conn);
}
?>