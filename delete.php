<?php

session_start();

require 'config.php';

// $db = new DbManager();
// $conn = $db->getConnection();

if (isset($_GET['id'])) {
    $book = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
    
    $_SESSION['success'] = "Deleting of Car is successful";
    header("Location: index.php");
}

?>