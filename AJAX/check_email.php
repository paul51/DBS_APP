<?php
// require_once '../classes/.php';
require_once '../classes/database.php';
 
$con = new database();
 
if (isset($_POST['email'])) {
    $email = $_POST['email'];
   
    if ($con->isemailExists($email)) {
        echo json_encode(['exists' => true]);
    } else {
        echo json_encode(['exists' => false]);
    }
 
 
} else {
    echo json_encode(['error' => 'Invalid request']);
}
 
?>